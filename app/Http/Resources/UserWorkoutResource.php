<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserWorkoutResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return parent::toArray($request);
    }

    public static function getInformationWorkoutFromUser(array $data)
    {
        $data['workouts'] = WorkoutExerciseResource::getExercisesFromWorkouts($data['workouts']);

        return [
          'name' => $data['name'],
          'workout_focus' => $data['workout_focus'],
          'workouts' => $data['workouts']
        ];


    }
}
