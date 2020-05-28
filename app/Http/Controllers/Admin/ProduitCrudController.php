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
        //$this->crud->setFromDb();
        $this->crud->setColumns([
          [
            'name' => "imge",
            'label' => "image",
            'type' => 'image',
            'upload' => true,
            'crop' => true, // set to true to allow cropping, false to disable
            'aspect_ratio' => 1,
            'height' => '80px',
            'width' => '80px'
          ],
          [
            'name' => 'nom',
            'label' => 'Nom produit ',
            'type' => 'text'
          ],
          [  // Select
 
            'label' => "Category",
            'type' => 'select',
            'name' => 'category_id', // the db column for the foreign key
            'entity' => 'category', // the method that defines the relationship in your Model
            'attribute' => 'name', // foreign key attribute that is shown to user
            'model' => "App\Models\Categorie",
          ],
          [    // Select2Multiple = n-n relationship (with pivot table)
            'label'     => "element de base",
            'name' => "url",
            'type' => "model_function",
            'function_name' => 'getSlugWithLink', // the method in your Model
            // 'function_parameters' => [$one, $two], // pass one/more parameters to that method
            // 
          ],
          
         [
            'name' => 'prix',
            'label' => 'Prix  ',
            'type' => 'number'
         ],
         [
            'name' => 'remise',
            'label' => 'Remise  ',
            'type' => 'number'
         ],
         [
            'name' => 'date_debut',
            'label' => 'Date debut  ',
            'type' => 'date'
         ],
         [
            'name' => 'date_fin',
            'label' => 'Date fin  ',
            'type' => 'datetime'
          ]
        ]
      );
    }

    protected function setupCreateOperation()
    {
        $this->crud->setValidation(ProduitRequest::class);

        // TODO: remove setFromDb() and manually define Fields
        // $this->crud->setFromDb();
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
          $this->crud->addField([    // Select2Multiple = n-n relationship (with pivot table)
            'label'     => "Element de Base ",
            'type'      => 'select2_multiple',
            'name'      => 'element', // the method that defines the relationship in your Model
            'entity'    => 'element', // the method that defines the relationship in your Model
            'attribute' => 'nomelem', // foreign key attribute that is shown to user
            'pivot'     => true, // on create&update, do you need to add/delete pivot table entries?
             /*      'model'     => "App\Models\Element", // foreign key model
                'options'   => (function ($query) {
                    return $query->orderBy('nomelem', 'ASC')->get();
                }), // force the related options to be a custom query, instead of all(); you can use this to filter the results show in the select
           */
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


    protected function setupShowOperation()
    {
        $this->crud->set('show.setFromDb', false);
 
        $this->crud->addColumn([
          'name' => "imge",
          'label' => "image",
          'type' => 'image',
          'upload' => true,
          'crop' => true, // set to true to allow cropping, false to disable
          'aspect_ratio' => 1,
          'height' => '80px',
          'width' => '80px'
        ]);
        $this->crud->addColumn([
          'label' => "Category",
          'type' => 'select',
          'name' => 'category_id', // the db column for the foreign key
          'entity' => 'category', // the method that defines the relationship in your Model
          'attribute' => 'name', // foreign key attribute that is shown to user
          'model' => "App\Models\Categorie",
        ]);
     
        $this->crud->addColumn([
          'name' => 'nom',
          'label' => 'Nom produit ',
          'type' => 'text'
        ]);
     
    
     
        $this->crud->addColumn([
          'name' => 'remise',
          'label' => 'Remise  ',
          'type' => 'number'
        ]);
     
        $this->crud->addColumn([
          'name' => 'prix',
          'label' => 'Prix  ',
          'type' => 'number'
        ]);
     
        $this->crud->addColumn([
          'label'     => "element de base",
          'name' => "url",
          'type' => "model_function",
          'function_name' => 'getSlugWithLink', // the method in your Model
          // 'function_parameters' => [$one, $two], // pass one/more parameters to that method
          // 
        ]);
     
      
        $this->crud->addColumn([
          'name' => 'date_fin',
          'label' => 'Date fin  ',
          'type' => 'datetime'
        ]);
     
        $this->crud->addColumn([
          'name' => 'date_debut',
          'label' => 'Date debut  ',
          'type' => 'date'
        ]);
    
      

      
    }



    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
