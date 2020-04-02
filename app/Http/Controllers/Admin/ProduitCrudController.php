<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ProduitRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class ProduitCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class ProduitCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        $this->crud->setModel('App\Models\Produit');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/produit');
        $this->crud->setEntityNameStrings('produit', 'produits');
    }

    protected function setupListOperation()
    {
        // TODO: remove setFromDb() and manually define Columns, maybe Filters
        $this->crud->setFromDb();
    }

    protected function setupCreateOperation()
    {
        $this->crud->setValidation(ProduitRequest::class);

        // TODO: remove setFromDb() and manually define Fields
        // $this->crud->setFromDb();
   
        $this->crud->addField([
            'name' => 'nom',
            'label' => 'Nom produit ',
            'type' => 'text'
          ]);
          $this->crud->addField([  // Select
 
            'label' => "Category",
            'type' => 'select',
            'name' => 'category_id', // the db column for the foreign key
            'entity' => 'category', // the method that defines the relationship in your Model
            'attribute' => 'name', // foreign key attribute that is shown to user
            'model' => "App\Models\Categorie",
   ]);
        $this->crud->addField([
            'name' => 'prix',
            'label' => 'Prix  ',
            'type' => 'number'
          ]);
        $this->crud->addField([
            'name' => 'remise',
            'label' => 'Remise  ',
            'type' => 'number'
          ]);
        $this->crud->addField([
            'name' => 'date_debut',
            'label' => 'Date debut  ',
            'type' => 'date'
          ]);
        $this->crud->addField([
            'name' => 'date_fin',
            'label' => 'Date fin  ',
            'type' => 'datetime'
          ]);

    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
