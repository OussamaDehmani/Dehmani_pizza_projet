<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



use App\Models\Produit;
use App\Models\Categorie;
use App\Models\Formule;
use App\Models\Commentaire;
use Illuminate\Support\Facades\DB;

class indexpage extends Controller
{
    function lister(){
        $produit= Produit::All();
        $categorie= Categorie::All();
        $formule= Formule::with('produit')->get();
        $produit_categorie=DB::table('categories')
        ->join('produits','produits.category_id','=','categories.id',)
        ->select('produits.*','categories.name' )
        ->get();
        $commentaire = DB::table('commentaires')
        ->join('clients','commentaires.users_id','=','clients.id')
        ->join('produits','produits.id','=','commentaires.product_id',)
        ->select('clients.imge','clients.nom','clients.prenom','commentaires.created_at','commentaires.text','produits.nom' )
        ->get();

       return view('index',['produit'=>$produit_categorie,'categorie'=>$categorie,'formule'=>$formule,
       'commentaire'=>$commentaire]);
    }
}
