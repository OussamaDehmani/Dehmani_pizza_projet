<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use CrudTrait;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'commandes';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    protected $guarded = ['id'];
    // protected $fillable = [];
    // protected $hidden = [];
    // protected $dates = [];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */
    public function product() {
        $tab=[];
        $ax= Commande::with('produit')->get();
       // foreach($ax as $a){
            foreach($this->produit as $b){
           array_push($tab,$b->nom);
        //   }  
       }
        $x=implode(",", $tab);
       return $x;
   }
    public function suplementaire() {
        $tab=[];
        $ax= Commande::with('suplement')->get();
       // foreach($ax as $a){
            foreach($this->suplement as $b){
           array_push($tab,$b->nomingred);
        //   }  
       }
        $x=implode(",", $tab);
       return $x;
   }
    public function form() {
        $tab=[];
        $ax= Commande::with('formule')->get();
        //foreach($ax as $a){
            foreach($this->formule as $b){
           array_push($tab,$b->nomFormule);
         //  }  
       }
        $x=implode(",", $tab);
       return $x;
   }
    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */
    public function suplement()
    {
        return $this->belongsToMany(Suplement::class);
    }
    public function produit()
    {
        return $this->belongsToMany(Produit::class);
    }
    public function formule()
    {
        return $this->belongsToMany(Formule::class);
    }
    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | ACCESSORS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
}
