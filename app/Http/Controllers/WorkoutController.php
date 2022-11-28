<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Workout;
use Illuminate\Http\Request;
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
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
}
