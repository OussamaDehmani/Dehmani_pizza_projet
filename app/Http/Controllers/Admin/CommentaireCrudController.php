<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CommentaireRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class CommentaireCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class CommentaireCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        $this->crud->setModel('App\Models\Commentaire');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/commentaire');
        $this->crud->setEntityNameStrings('commentaire', 'commentaires');
    }

    protected function setupListOperation()
    {
        // TODO: remove setFromDb() and manually define Columns, maybe Filters
        $this->crud->setFromDb();
    }

    protected function setupCreateOperation()
    {
        $this->crud->setValidation(CommentaireRequest::class);

        // TODO: remove setFromDb() and manually define Fields
       // $this->crud->setFromDb();
       $this->crud->addField([
        'name' => 'date_pub',
        'label' => 'Date Publication',
        'type' => 'datetime'
      ]);
       $this->crud->addField([   // CKEditor
        'name' => 'text',
        'label' => 'Text',
        'type' => 'ckeditor',
       ]);
      $this->crud->addField([  // Select
 
        'label' => "Code Produit",
        'type' => 'select',
        'name' => 'product_id', // the db column for the foreign key
        'entity' => 'product', // the method that defines the relationship in your Model
        'attribute' => 'nom', // foreign key attribute that is shown to user
        'model' => "App\Models\Produit",
]);
      $this->crud->addField([  // Select
 
        'label' => "Num Client",
        'type' => 'select',
        'name' => 'users_id', // the db column for the foreign key
        'entity' => 'users', // the method that defines the relationship in your Model
        'attribute' => 'login', // foreign key attribute that is shown to user
        'model' => "App\Models\Client",
]);
    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
