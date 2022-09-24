<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\WorkoutExerciseRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class WorkoutExerciseCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class WorkoutExerciseCrudController extends CrudController
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
        CRUD::setModel(\App\Models\WorkoutExercise::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/workout-exercise');
        CRUD::setEntityNameStrings('workout exercise', 'workout exercises');
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
            'name' => 'rep',
            'label' => 'Repetições',
            'type' => 'number'
        ]);

        CRUD::addColumn([
            'name' => 'sets',
            'label' => 'Series',
            'type' => 'number'
        ]);

        CRUD::addColumn([
            'name' => 'weight',
            'label' => 'Peso',
            'type' => 'number'
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
        CRUD::setValidation(WorkoutExerciseRequest::class);

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
            'name' => 'rep',
            'label' => 'Repetições',
            'type' => 'number'
        ]);

        CRUD::addField([
            'name' => 'sets',
            'label' => 'Series',
            'type' => 'number'
        ]);

        CRUD::addField([
            'name' => 'weight',
            'label' => 'Peso',
            'type' => 'number'
        ]);
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

    // if you just want to show the same columns as inside ListOperation
    protected function setupShowOperation()
    {
        $this->setupListOperation();

        CRUD::addField([
            'name' => 'created_at',
            'label' => 'Data da Criação',
            'type' => 'date'
            //todo olhar o formato das datas
        ]);

        CRUD::addField([ 'name' => 'updated_at',
            'label' => 'Data de Modificação',
            'type' => 'date']);
    }
}
