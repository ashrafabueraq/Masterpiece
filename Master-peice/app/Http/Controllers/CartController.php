<?php

namespace App\Http\Controllers;

use App\Models\cart;
use App\Models\User;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()){

            $cart = Cart::where('user_id',Auth::user()->id)->get();
            return view('cart', compact('cart'));
        }else{
            return redirect('/')->with('status', 'please log in first');
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
        $product_id = $request->input('buypro');

        if(Auth::check()){
             $prod = Product::where('id', $product_id)->first();
             if($prod){
                  
                if(Cart::where('prod_id', $product_id)->where('user_id', Auth::user()->id)->exists()){
                    
                    return redirect('/cart')->with('status',$prod->product_name.' Already added to cart');
                }else{

                    $cart = new Cart();
                    $cart->user_id= Auth::user()->id;
                    $cart->prod_id = $product_id; 
   
                    $cart->save();
                return redirect('/cart')->with('status', 'your product ' .$prod->product_name. ' added to cart');


                }
             }      
             
        }
        else{
            return redirect('/')->with('failed', ' failed you need to Sign in or Sign up');
        }
    }

   
       
      


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cart = Cart::find($id);
        $cart->delete();
        return redirect('cart')->with('status', 'the product deleted from cart');
    }
}
