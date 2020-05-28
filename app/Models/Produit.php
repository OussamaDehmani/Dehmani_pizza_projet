<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use CrudTrait;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */
   
    protected $table = 'produits';
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
    
    public function getSlugWithLink() {
         $tab=[];
         $ax= Produit::with('produit')->get();
         foreach($ax as $a){
             foreach($a->element as $b){
            array_push($tab,$b->nomelem);
            }  
        }
         $x=implode(",", $tab);
        return $x;
    }



    public function category()
    {
        return $this->belongsTo(Categorie::class);
    }
    public function com()
    {
        return $this->hasMany(Commentaire::class);
    }
    public function element()
    {
        return $this->belongsToMany(Element::class);
    }
    public function commande()
    {
        return $this->belongsToMany(Commande::class);
    }
    public function formule()
    {
        return $this->belongsToMany(Formule::class);
    }
    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |------------------------------------Categorie--------------------------------------
    */
    public function setImageAttribute($value)
    {
        $attribute_name = "imge";
        $disk = config('backpack.base.root_disk_name'); // or use your own disk, defined in config/filesystems.php
        $destination_path = "public/uploads/folder_1/folder_2"; // path relative to the disk above

        // if the image was erased
        if ($value==null) {
            // delete the image from disk
            \Storage::disk($disk)->delete($this->{$attribute_name});

            // set null in the database column
            $this->attributes[$attribute_name] = null;
        }

        // if a base64 was sent, store it in the db
        if (starts_with($value, 'data:image'))
        {
            // 0. Make the image
            $image = \Image::make($value)->encode('jpg', 90);

        // 1. Generate a filename.
            $filename = md5($value.time()).'.jpg';

        // 2. Store the image on disk.
            \Storage::disk($disk)->put($destination_path.'/'.$filename, $image->stream());

        // 3. Delete the previous image, if there was one.
            \Storage::disk($disk)->delete($this->{$attribute_name});

            // 4. Save the public path to the database
        // but first, remove "public/" from the path, since we're pointing to it from the root folder
        // that way, what gets saved in the database is the user-accesible URL
            $public_destination_path = Str::replaceFirst('public/', '', $destination_path);
            $this->attributes[$attribute_name] = $public_destination_path.'/'.$filename;

        }
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
