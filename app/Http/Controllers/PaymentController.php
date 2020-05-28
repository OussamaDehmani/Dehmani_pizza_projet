<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\support\Arr;
use App\Models\Commande;
use App\Models\Produit;
use App\Models\Formule;
use App\Models\Suplement;
use App\Models\Commande_produit;
use App\Models\Commande_formule;
use App\Models\Commande_suplement;
class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Cart::count()>0 ){
            \Stripe\Stripe::setApiKey('sk_test_xgcJI1CGhEmiuuhRUWnUD8df00rJEBjqxy');
            //dd( round(Cart::total()));
            $intent = \Stripe\PaymentIntent::create([
            'amount' => round(Cart::total()),
            'currency' => 'usd',
            // Verify your integration in this guide by including this parameter
            'metadata' => ['integration_check' => 'accept_a_payment'],
            ]);
            $cle=Arr::get($intent,'client_secret');
            return view('payment',['clientsecret'=>$cle]);
        }
        else{
            return redirect()->route('index');
        }
       
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
       
        $data=$request->json()->all();
        $commande=new Commande();
        $commande->adressliv=$data["secteur"];
        $commande->type="type x";
        $commande->realise=1;
       $commande->secteur=$data["secteur"];
        $products=[];
        $formules=[];
        $suplements=[];
        $i=0;
        $x=0;
        $y=0;
        foreach(Cart::content() as $produit){
            if($produit->options['type']=="produit"){
            $xyz= Produit::findOrFail($produit->id);
            array_push($products, $xyz->id);
            
        }
            if($produit->options['type']=="formule"){
                $xyz= Formule::findOrFail($produit->id);
                array_push($formules, $xyz->id);
        }
            if($produit->options['type']=="suplement"){
                $xyz= Suplement::findOrFail($produit->id);
                array_push($suplements, $xyz->id);
        }
        }

        $commande->save();
        if(count($products)>0){
         
                $commande->produit()->attach($products);
             
        }     
        if(count($formules)>0){
                $commande->formule()->attach($formules);

            } 
             
        if(count($suplements)>0){
            $commande->suplement()->attach($suplements);

            }   
            Cart::destroy();      
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
