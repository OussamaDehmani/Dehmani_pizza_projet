<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;
class DetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
       //dd('hello');
        $prod=Produit::where('id',$id)->first();
        
        $produit=\DB::table('produits')
        ->join('categories','produits.category_id','=','categories.id',)
        ->join('element_produit','element_produit.produit_id','=','produits.id',)
        ->join('elements','element_produit.element_id','=','elements.id',)
        ->where('produits.id',$id)
        ->select('produits.id','produits.*','categories.*','elements.*' )
        ->get();
        
        $categorie=\DB::table('produits')
        ->where('produits.category_id',$prod->category_id)
        ->select('produits.*')->get();

       // $related=Produit::where('category_id',$prod->category_id);
      // dd($categorie);
     

        return view('shop-details',['categorie'=>$categorie])->with('produit',$produit)->with('id',$id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
