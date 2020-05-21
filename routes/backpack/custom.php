<?php

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => ['web', config('backpack.base.middleware_key', 'admin')],
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    Route::crud('categorie', 'CategorieCrudController');
    Route::crud('produit', 'ProduitCrudController');
    Route::crud('produit', 'ProduitCrudController');
    Route::crud('categorie', 'CategorieCrudController');
    Route::crud('client', 'ClientCrudController');
    Route::crud('client', 'ClientCrudController');
    Route::crud('formule', 'FormuleCrudController');
    Route::crud('formule', 'FormuleCrudController');
    Route::crud('commentaire', 'CommentaireCrudController');
    Route::crud('commentaire', 'CommentaireCrudController');
    Route::crud('suplement', 'SuplementCrudController');
    Route::crud('element', 'ElementCrudController');
    Route::crud('commande', 'CommandeCrudController');
}); // this should be the absolute last line of this file