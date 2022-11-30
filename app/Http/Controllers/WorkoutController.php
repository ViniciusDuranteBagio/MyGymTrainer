<?php

namespace App\Http\Controllers;

use App\Models\Exercise;
use App\Models\User;
use App\Models\Workout;
use App\Models\WorkoutExercise;
use App\Models\WorkoutHistory;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Kint\Kint;
use Spatie\FlareClient\Http\Exceptions\NotFound;
use Spatie\FlareClient\Http\Response;

class WorkoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Workout::all();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $workout =  Workout::with('exercises')->findOrFail($id);
        return $workout;
    }

    public function updateExercise(Request $resquest)
    {
        $requestParams = $resquest->request->all();

        if ($requestParams){
            $workoutId = $requestParams['workoutId'];
            $exerciseId = $requestParams['id'];
            $weight = $requestParams['weight'];
        }

        WorkoutExercise::updateExerciseForWorktou($workoutId, $exerciseId, $weight);

    }

    public function insertDayInHistory(Request $resquest)
    {
        $requestParams = $resquest->request->all();

        if ($requestParams){
            $clientId = $requestParams['clientId'];
            $workoutId = $requestParams['workoutId'];
        }
        WorkoutHistory::insertHistory($workoutId, $clientId);


    }

    public function startWorkout($id)
    {

        if ($id != \Auth::id()){
            abort(404);
        }
        $params = [];

        $user = User::with('workouts')->findOrFail($id)->toArray();
        $workouts = $this->getWorkoutByUser($user);
        if ($workouts){
            $params['workouts'] =  $this->populateParamsWorkoutScreen($workouts[0]);
        }else{
            $params['workouts'] = [];
        }

        return view('workout', $params);
    }

    public function getWorkoutByUser($user)
    {
        $workouts = [];

        $userWorkouts = $user['workouts'];
        foreach ($userWorkouts as $workoutId){
            $workouts[] = Workout::with('exercises')->findOrFail($workoutId['id'])->toArray();
        }

        return $workouts;
    }

    public function populateParamsWorkoutScreen(array $data)
    {
        $paramsWorkoutScreen = [];
        $workout = $data;
        $exercises = $data['exercises'];

        $exercisesParams =  $this->getExercisesParams($exercises);

        $paramsWorkoutScreen['workout']['id'] = $workout['id'];
        $paramsWorkoutScreen['workout']['name'] = $workout['nm_workout'];
        $paramsWorkoutScreen['workout']['durationWorkout'] = $workout['average_workout_time'];
        $paramsWorkoutScreen['workout']['countExercieses'] = $exercisesParams['countExercieses'];
        unset($exercisesParams['countExercieses']);

        $paramsWorkoutScreen['workout']['exercises'] = $exercisesParams;

        return $paramsWorkoutScreen;
    }

    public function getExercisesParams(array $exercieseData)
    {
        $exercises = [];
        $exercisesOrder = 0;

        foreach ($exercieseData as $exercieseDatum){
            $exercisesOrder++;

            $exercises[$exercisesOrder]['id'] = $exercieseDatum['id'];
            $exercises[$exercisesOrder]['image'] = $exercieseDatum['im_exercise'];
            $exercises[$exercisesOrder]['name'] = $exercieseDatum['nm_exercise'];
            $exercises[$exercisesOrder]['description'] = $exercieseDatum['description'];
            $exercises[$exercisesOrder]['rep'] = $exercieseDatum['workout_exercise_details']['rep'];
            $exercises[$exercisesOrder]['sets'] = $exercieseDatum['workout_exercise_details']['sets'];
            $exercises[$exercisesOrder]['weight'] = $exercieseDatum['workout_exercise_details']['weight'];
        }

        $exercises['countExercieses'] = count($exercieseData);
        return $exercises;
    }

    public function inProgressWorkout($id)
    {
        $params = [];
        $params['workouts'] = [];

        $user = User::with('workouts')->findOrFail($id)->toArray();
        $workouts = $this->getWorkoutByUser($user);
        if ($workouts){
            $params['workouts'] =  $this->populateParamsWorkoutScreen($workouts[0]);
        }
        return view('inProgressWorkout', $params);
    }

    public function workoutCompleted($userId)
    {
        $params = [];
        $hasWorkedOutToday = $this->hasWorkedOutToday($userId);

        if (!$hasWorkedOutToday){
         $dataScore = $this->generateScoreForWorkout($userId);
        $params['score'] = $dataScore['score'];
        $params['timeWorkout'] = $dataScore['timeWorkout'];
        }

        return view('workoutCompleted', $params);
    }

    public function hasWorkedOutToday($userId)
    {
        $workout = WorkoutHistory::all()
            ->where('user_id','=',$userId)
            ->where('created_at', '>',Carbon::today())
            ->where('created_at', '<',Carbon::tomorrow());

        if ($workout->count() < 2){
            return false;
        }

        return true;

    }

    public function generateScoreForWorkout($userId)
    {
        $data = [];

        $workout = WorkoutHistory::all()->where('user_id','=',$userId)->where('created_at', '>',Carbon::today())->firstOrFail();
        $timeWorkoutStart = $workout->timeWorkout;

        $workoutId = $workout->workout_id;
        $workoutTimeShouldUse = Workout::findOrFail($workoutId)->average_workout_time;

        $workoutTimeUtilized = Carbon::now()->diffInMinutes($timeWorkoutStart);

        $score = $this->calculateScore($workoutTimeShouldUse,$workoutTimeUtilized);

        $data['timeWorkout'] = $workoutTimeUtilized;
        $data['score'] = $score;
        return $data;
    }

    public function calculateScore($workoutTimeShouldUse,$workoutTimeUtilized)
    {
        $maxScore = 300;

        $time = Carbon::make($workoutTimeShouldUse);
        $hora = $time->hour * 60;
        $minute = $time->minute;
        $timeSholdUsedInMinutes = $hora+$minute;

        if ($workoutTimeUtilized > $timeSholdUsedInMinutes){
            return $maxScore;
        }else{
            $score = $maxScore * $workoutTimeUtilized / $timeSholdUsedInMinutes;
            return $score;
        }
    }
}
