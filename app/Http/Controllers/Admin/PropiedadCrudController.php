<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\PropiedadRequest as StoreRequest;
use App\Http\Requests\PropiedadRequest as UpdateRequest;
use Backpack\CRUD\CrudPanel;
use App\Models\Propiedad;


/**
 * Class PropiedadCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class PropiedadCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Propiedad');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/propiedad');
        $this->crud->setEntityNameStrings('propiedad', 'propiedades');

        /*
        |--------------------------------------------------------------------------
        | CrudPanel Configuration
        |--------------------------------------------------------------------------
        */

        // TODO: remove setFromDb() and manually define Fields and Columns
//        $this->crud->setFromDb();
        $this->crud->setColumns([
            [
                'name' => 'nombre',
                'label' => 'Nombre',
                'type' => 'text',
            ],
            [
                'name' => 'costo',
                'label' => 'Costo',
                'type' => 'text',
            ],
            [
                'name' => 'descripcion',
                'label' => 'Descripcion',
                'type' => 'text',
            ],
        ]);

        $this->crud->addFields([
            [
                'label' => 'Nombre',
                'type' => "text",
                'name' => 'nombre',
            ],
            [
                'label' => 'Costo',
                'type' => 'number',
                'name' => 'costo'
            ],
            [
                'label' => 'Descripción',
                'type' => 'textarea',
                'name' => 'descripcion'
            ],
            [
                'label' => 'Tamaño de Construcción',
                'type' => 'number',
                'name' => 'tamano_construccion'
            ],
            [
                'label' => 'Tamaño de Terreno',
                'type' => 'number',
                'name' => 'tamano_terreno'
            ],
            [   // Address
                'name' => 'localizacion',
                'label' => 'Dirección',
                'type' => 'text'
            ],
            [
                'label' => 'Imagen',
                'type' => 'image',
                'name' => 'image',
                'upload' => true,
                'crop' => true,
            ],
            [
                'name' => 'avaluo',
                'label' => 'Avaluo',
                'type' => 'upload',
                'upload' => true,
                'disk' => 'uploads'
            ],
            [
                'label' => 'Provincia',
                'type' => "select2_from_ajax",
                'name' => 'provincia_codigo', // the column that contains the ID of that connected entity
                'entity' => 'provincia', // the method that defines the relationship in your Model
                'attribute' => "nombre", // foreign key attribute that is shown to user
                'data_source' => url("api/internals/provincia"), // url to controller search function (with /{id} should return model)
                'placeholder' => 'Seleccione Provincia', // placeholder for the select
                'minimum_input_length' => 0, // minimum characters to type before querying results
            ],
            [
                'label' => 'Canton',
                'type' => "select2_from_ajax",
                'name' => 'canton_codigo', // the column that contains the ID of that connected entity
                'entity' => 'canton', // the method that defines the relationship in your Model
                'attribute' => "nombre", // foreign key attribute that is shown to user
                'data_source' => url("api/internals/canton"), // url to controller search function (with /{id} should return model)
                'placeholder' => 'Seleccione Cantón', // placeholder for the select
                'minimum_input_length' => 0, // minimum characters to type before querying results
                'dependencies' => ['provincia_codigo'], // when a dependency changes, this select2 is reset to null
                'method'                    => 'GET', // optional - HTTP method to use for the AJAX call (GET, POST)
            ],
            [
                'label' => 'Distrito',
                'type' => "select2_from_ajax",
                'name' => 'distrito_codigo', // the column that contains the ID of that connected entity
                'entity' => 'distrito', // the method that defines the relationship in your Model
                'attribute' => "nombre", // foreign key attribute that is shown to user
                'data_source' => url("api/internals/distrito"), // url to controller search function (with /{id} should return model)
                'placeholder' => 'Seleccione Distrito', // placeholder for the select
                'minimum_input_length' => 0, // minimum characters to type before querying results
                'dependencies' => ['canton_codigo'], // when a dependency changes, this select2 is reset to null
                'method'                    => 'GET', // optional - HTTP method to use for the AJAX call (GET, POST)
            ]
//            [
//                'name' => 'plano',
//                'label' => 'Plano',
//                'type' => 'upload',
//                'upload' => true,
//                'disk' => 'uploads' // if you store files in the /public folder, please ommit this; if you store them in /storage or S3, please specify it;
//            ],

        ]);

        // add asterisk for fields that are required in PropiedadRequest
        $this->crud->setRequiredFields(StoreRequest::class, 'create');
        $this->crud->setRequiredFields(UpdateRequest::class, 'edit');
    }

    public function ver()
    {

        $propiedad = Propiedad::all();

        return view('propiedades/propiedades', compact('propiedad'));

    }

    public function store(StoreRequest $request)
    {
        // your additional operations before save here
        $redirect_location = parent::storeCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }

    public function update(UpdateRequest $request)
    {
        // your additional operations before save here
        $redirect_location = parent::updateCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }

    public function details(Propiedad $propiedad)
    {
        $propiedad = Propiedad::findOrFail($propiedad);

        return view('propiedades/show', compact('propiedad'));
    }


}
