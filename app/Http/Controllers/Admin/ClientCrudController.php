<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ClientRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class ClientCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class ClientCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        $this->crud->setModel('App\Models\Client');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/client');
        $this->crud->setEntityNameStrings('client', 'clients');
    }

    protected function setupListOperation()
    {
        $this->crud->setColumns([
            [
                'name' => "imge",
                'label' => "image",
                'type' => 'image',
                'upload' => true,
                'aspect_ratio' => 1,
                'height' => '80px',
                'width' => '80px'
            ],
            [
                'name' => 'nom',
                'label' => 'Nom ',
                'type' => 'text'
            ],
            [
                'name' => 'prenom',
                'label' => 'Prenom ',
                'type' => 'text'
            ],
            [
                'name' => 'adresse',
                'label' => 'Adresse ',
                'type' => 'text'
            ],
            [
                'name' => 'email',
                'label' => 'Email',
                'type' => 'text'
            ],
            [
                'name' => 'login',
                'label' => 'Login',
                'type' => 'text'
            ],
            [
                'name' => 'motdepasse',
                'label' => 'Password',
                'type' => 'password'
            ],
            [
                'name' => 'ca',
                'label' => 'Reduction',
                'type' => 'number'
            ],
            [
                'name' => 'date_inscr',
                'label' => 'Date inscription',
                'type' => 'date'
            ]
        ]);
    }

    protected function setupCreateOperation()
    {
        $this->crud->setValidation(ClientRequest::class);

        // TODO: remove setFromDb() and manually define Fields
        $this->crud->addField([
            'name' => 'nom',
            'label' => 'Nom ',
            'type' => 'text'
          ]);
          $this->crud->addField([  
            'name' => 'prenom',
            'label' => 'Prenom ',
            'type' => 'text'
            
          ]);
          $this->crud->addField([
                'name' => "imge",
                'label' => "image",
                'type' => 'image',
                'upload' => true,
                'crop' => true, // set to true to allow cropping, false to disable
                'aspect_ratio' => 1,
                'height' => '80px',
                'width' => '80px'
          ]);
        $this->crud->addField([
                'name' => 'adresse',
                'label' => 'Adresse ',
                'type' => 'text'
          ]);
        $this->crud->addField([
                'name' => 'email',
                'label' => 'Email',
                'type' => 'text'
        ]);
        $this->crud->addField([
            'name' => 'login',
            'label' => 'Login',
            'type' => 'text'
        ]);
        $this->crud->addField([
            'name' => 'motdepasse',
            'label' => 'Password',
            'type' => 'password'
        ]);
        $this->crud->addField([
            'name' => 'ca',
            'label' => 'Reduction',
            'type' => 'number'
        ]);
        $this->crud->addField([
            'name' => 'date_inscr',
            'label' => 'Date inscription',
            'type' => 'date'
        ]);
    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
