<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserWorkoutResource;
use App\Models\Configs;
use App\Models\User;
use Carbon\Carbon;
use Database\Seeders\DatabaseSeeder;
use Illuminate\Http\Request;
use Kint\Kint;
use function Termwind\ValueObjects\lineThrough;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return User::all();
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
        $user =  User::findOrFail($id);
        return $user;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getUserWithWorkout($id)
    {
        $data =  User::with('workouts.exercises')->findOrFail($id);
        $filterData = UserWorkoutResource::getInformationWorkoutFromUser($data->toArray());
        return $filterData;
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



    public function myAccount($id)
    {
        $params = [];

        $user = User::findOrFail($id);
        $params['user'] = $user;
        return view('myAccount',$params);
    }

    public function changeWorkout($id)
    {
        $params = [];

        $user = User::with('workouts')->findOrFail($id);
        $workoutUpdatedAt = $this->getUpdatedAtWorkout($user);
        if (!$workoutUpdatedAt){
            return view('changeWorkout',$params);
        }
        $daysWithWorkout = $this->calculateTimeWithWorkout($workoutUpdatedAt);

        $params['timeWithWorkout'] = $daysWithWorkout;
        return view('changeWorkout',$params);
    }

    public function getUpdatedAtWorkout($user)
    {
        $workout = $user->toArray()['workouts'];
        if (!$workout){
            return false;
        }
        $workout = $workout[0];
        return $workout['pivot']['updated_at'];
    }

    public function calculateTimeWithWorkout($dateUpdatedAt)
    {
        $dateTime = Carbon::make($dateUpdatedAt);

        return Carbon::now()->diffInDays($dateTime);
    }

    public function contract($id)
    {
        $params = [];
        $pix = Configs::findOrFail(1);
        $user = User::with('workouts')->findOrFail($id)->toArray();
        $expiresDate = Carbon::make($user['contract_dueDate'])->format('d/m/Y');
        $params['expires'] = $expiresDate ;
        $params['config'] = $pix;

        return view('expireDate', $params);
    }

    public function ranking()
    {
        $params = [];
//        $usuarios = User::all();
//        $users = $this->getDataForRanking($usuarios->sortBy("nr_score"));
        $params['usuarios'] = [];
        $params['rakingGeral']= [];
        return view('ranking', $params);
    }

    public function getDataForRanking($users)
    {
        $dataRanking = [];
        $i = 1;
        foreach ($users as $user){
            $dataRanking['names'][] = $user['name'];
            $dataRanking['score'][] = $user['nr_score'];
            $i++;
            if ($i == 10){
                continue;
            }
        }

        return $dataRanking;
    }

    public function editMyAcount($id)
    {
        $params = [];
        $user = User::findOrFail($id);
        if ($user){
            $params['name'] = $user->name;
            $params['phone'] = $user->phone;
            $params['email'] = $user->email;
            $params['workoutFocus'] = $user->workout_focus;
        }

        return view('editAccount',$params);
    }
}
