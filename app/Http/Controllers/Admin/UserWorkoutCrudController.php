<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\UserWorkoutRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class UserWorkoutCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class UserWorkoutCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\UserWorkout::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/user-workout');
        CRUD::setEntityNameStrings('user workout', 'user workouts');
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
            'label'     => "Usuario",
            'type'      => 'select',
            'name'      => 'user_id',
            'entity' => 'users',
            'attribute' => 'name',
            'model' => "App\Models\User "
        ]);

        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']);
         */
    }

    /**
     * Define what happens when the Create operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(UserWorkoutRequest::class);


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
            'label'     => "Usuario",
            'type'      => 'select',
            'name'      => 'user_id',
            'model'     => "App\Models\User",
            'attribute' => 'name',
            'options'   => (function ($query) {
                return $query->orderBy('name', 'ASC')->get();
            }),
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
}
