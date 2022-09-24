<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\UserWorkoutHistoryRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class UserWorkoutHistoryCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class UserWorkoutHistoryCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\UserWorkoutHistory::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/user-workout-history');
        CRUD::setEntityNameStrings('user workout history', 'user workout histories');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {

        CRUD::addColumn(([
            'label'     => "Treino",
            'type'      => 'select',
            'name'      => 'workout_id',
            'entity' => 'workouts',
            'attribute' => 'nm_workout',
            'model' => "App\Models\Workout"
        ]));
        CRUD::addColumn([
            'label'     => "Exercício",
            'type'      => 'select',
            'name'      => 'exercise_id',
            'entity' => 'exercises',
            'attribute' => 'nm_exercise',
            'model' => "App\Models\Exercise "
        ]);
        CRUD::addColumn([
            'label'     => "Cliente",
            'type'      => 'select',
            'name'      => 'user_id',
            'entity' => 'users',
            'attribute' => 'name',
            'model' => "App\Models\User"
        ]);

        CRUD::addColumn([
           "label" => "Peso",
            "name" => "weight",
            "type" => "number"
        ]);

        CRUD::addColumn([
           "label" => "Repetições",
            "name" => "rep",
            "type" => "number"
        ]);

        CRUD::addColumn([
           "label" => "Series",
            "name" => "sets",
            "type" => "number"
        ]);

        CRUD::addColumn([
           "label" => "Data da execução do treino",
            "name" => "date",
            "type" => "date"
            // todo verificar formatação de data
        ]);
    }

    /**
     * Define what happens when the Create operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(UserWorkoutHistoryRequest::class);

        CRUD::addField([
            'label'     => "Treino",
            'type'      => 'select',
            'name'      => 'workout_id',
            'model'     => "App\Models\Workout",
            'attribute' => 'nm_workout',
            'options'   => (function ($query) {
                return $query->orderBy('nm_workout', 'ASC')->get();
            }),
        ]);

        CRUD::addField([
            'label'     => "Exercício",
            'type'      => 'select',
            'name'      => 'exercise_id',
            'model'     => "App\Models\Exercise",
            'attribute' => 'nm_exercise',
            'options'   => (function ($query) {
                return $query->orderBy('nm_exercise', 'ASC')->get();
            }),
        ]);
        CRUD::addField([
            'label'     => "Ususario",
            'type'      => 'select',
            'name'      => 'user_id',
            'model'     => "App\Models\User",
            'attribute' => 'name',
            'options'   => (function ($query) {
                return $query->orderBy('name', 'ASC')->get();
            }),
        ]);

        CRUD::addField([
            "label" => "Peso",
            "name" => "weight",
            "type" => "number"
        ]);

        CRUD::addField([
            "label" => "Repetições",
            "name" => "rep",
            "type" => "number"
        ]);

        CRUD::addField([
            "label" => "Series",
            "name" => "sets",
            "type" => "number"
        ]);

        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number'])); 
         */
    }

    /**
     * Define what happens when the Update operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }

    protected function setupShowOperation()
    {
        $this->setupListOperation();
    }
}
