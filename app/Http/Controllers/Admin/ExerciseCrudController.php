<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ExerciseRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class ExerciseCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class ExerciseCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Exercise::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/exercise');
        CRUD::setEntityNameStrings('exercise', 'exercises');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::addColumn([
            'name' => 'nm_exercise',
            'label' => 'Exercício',
            'type' => 'text'
        ]);
        CRUD::addColumn([
            'name' => 'im_exercise',
            'label' => 'Caminho da Imagem',
            'type' => 'text',
        ]);
        CRUD::addColumn([
            'name' => 'description',
            'label' => 'Descrição',
            'type' => 'text',
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
        CRUD::setValidation(ExerciseRequest::class);

        CRUD::addField([
            'name' => 'nm_exercise',
            'label' => 'Exercício',
            'type' => 'text'
        ]);
        CRUD::addField([
            'name' => 'im_exercise',
            'label' => 'Caminho da Imagem',
            'type' => 'text'
        ]);
        CRUD::addField([
            'name' => 'description',
            'label' => 'Descrição',
            'type' => 'text'
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

    // if you just want to show the same columns as inside ListOperation
    protected function setupShowOperation()
    {

        CRUD::addColumn([
            'name' => 'nm_exercise',
            'label' => 'Exercício',
            'type' => 'text'
        ]);
        CRUD::addColumn([
            'name' => 'im_exercise',
            'label' => 'Caminho da Imagem',
            'type' => 'text',
            'limit' => '200'
        ]);
        CRUD::addColumn([
            'name' => 'description',
            'label' => 'Descrição',
            'type' => 'text',
            'limit' => '2000'
        ]);

        CRUD::addColumn([
            'name' => 'created_at',
            'label' => 'Data da Criação',
            'type' => 'date'
        ]);
        CRUD::addColumn([ 'name' => 'updated_at',
            'label' => 'Data de Modificação',
            'type' => 'date']);
    }
}
