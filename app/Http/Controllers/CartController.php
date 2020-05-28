<?php

namespace App\Http\Controllers;
use App\Models\Produit;
use App\Models\Commande;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Suplement;
use App\Models\Formule;
use Gloudemans\Shoppingcart\Facades\Cart;



class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suplements=Suplement::All();
            $supl=[];
            $i=0;
            $cnt=Cart::content();
            // dd($cnt->qty);
            foreach($cnt as $c){
                foreach($c->options as $cc){
                    
                    if($cc=="suplement"){
                        $supl[$i]=$c;
                    $i++;
                    }
                    
                }
                
        }

        $prod=[];
            $i=0;
            $cnt=Cart::content();
            //dd($cnt);
            foreach($cnt as $c){
                foreach($c->options as $cc){
                    
                    if($cc=="produit"){
                        $prod[$i]=$c;
                    $i++;
                    }   
                } 
        }

        $formules=Formule::All();
            $formule=[];
            $i=0;
            $cnt=Cart::content();
            // dd($cnt->qty);
            foreach($cnt as $c){
                foreach($c->options as $cc){
                    
                    if($cc=="formule"){
                        $formule[$i]=$c;
                    $i++;
                    }
                    
                }
            
        }
            $products=$prod;
            $i=0;
            $tab=[];
            $formu= Formule::with('produit')->get();
        return view('shopingcart',['suplements'=>$suplements,'sup'=>$supl,'produit'=>$prod,'formule'=>$formule]);

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
   
       $prod= Produit::find($request->id);
       
       Cart::add($prod->id,$prod->nom,1,$prod->prix,['type' => 'produit'])->associate('App\Produit');
        
        return redirect()->route('index')->with('succes','le produit est ajouté avec succes.');
    }
    public function storeformule(Request $request)
    { 
   
       $formule= Formule::find($request->id);
       
       Cart::add($formule->id,$formule->nomFormule,1,$formule->prix,['type' => 'formule'])->associate('App\Formule');
        
        return redirect()->route('index')->with('succes','le formule est ajouté avec succes.');
    }


    public function sup(Request $request)
    { 

    $tab=$request->input('suplements');
    for($i = 0;$i<count($tab);$i++){
            $id=intval($tab[$i]);
            $sup= Suplement::find($id);
            Cart::add($sup->id,$sup->nomingred,1,$sup->prix_sup,['type' => 'suplement'])->associate('App\Suplement');
            
    }
    return redirect()->route('cart.index')->with('succes','les suplement sont ajoutés avec succes.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function update(Request $request,$rowId)
    {
        $data = $request->json()->all();
        //dd($data);
        Cart::update($rowId, $data['qty']);
        Session::flash('success', 'La quantité du produit est passée à ' . $data['qty'] . '.');
        return response()->json(['success' => 'Cart Quantity Has Been Updated']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cart::remove($id);
        return back()->with('succes','le produit a été supprimé avec succes.');

    }
}
