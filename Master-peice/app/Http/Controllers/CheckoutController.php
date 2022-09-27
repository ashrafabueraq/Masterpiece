<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\order;
use App\Models\OrderItem;
use App\Models\User;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
           
        $cart = Cart::where('user_id', Auth::user()->id)->get();
        return view('checkout', compact('cart'));
    }

    public function placeorder(Request $request)
    {

        $request->validate([
            'phone'=>['required', 'min:10', 'max:10']
        ]);

      


        $order = new Order();
        $order->user_id = Auth::id();
        $order->fname = $request->input('firstname');
        $order->lname = $request->input('lastname');
        $order->email = $request->input('email');
        $order->phone = $request->input('phone');
        $order->address = $request->input('address');
        $order->city = $request->input('city');
        $order->country = $request->input('country');
        $order->pincode = $request->input('pincode');

       

        $cart_total = Cart::where('user_id', Auth::user()->id)->get();
          
        $total = 0;
        foreach($cart_total as $prod){

            $total += $prod->products->max_number;

        }

        $order->total_price = $total;


        $order->save();

        $cart = Cart::where('user_id', Auth::user()->id)->get();

        foreach($cart as $item){
            OrderItem::create([
                'order_id'=> $order->id,
                'prod_id'=> $item->prod_id,
                'price'=>$item->products->max_number,
            ]);

        }

        // $validator = Validator::make($request->all(),
        // [
        //     'name' => ''
        // ]);


        

        if(Auth::user()->pincode == null){

            $user = User::where('id', Auth::user()->id)->first();
            $user->lname = $request->input('lastname');
            $user->phone = $request->input('phone');
            $user->address = $request->input('address');
            $user->city = $request->input('city');
            $user->country = $request->input('country');
            $user->pincode = $request->input('pincode');

            $user->update();

            
        }
         
        $cart = Cart::where('user_id', Auth::user()->id)->get();
        Cart::destroy($cart);

        // $cart_prod = Cart::where('user_id', Auth::user()->id)->get();

        // foreach ($cart_prod as $del){

        //     $prodd = Product::where('id', $del->prod_id)->first();
        //     Product::destroy($prodd);
             
        // }
        
          
        

        // foreach($cart as $item){
        //     $product = Product::find($item->prod_id);
        //     Product::destroy($product);
        // }
       
          
        // $cart = Cart::where('user_id', Auth::user()->id)->get();
        // Cart::destroy($cart);

        // foreach($cart as $item){
        //     $product = Product::where('id', $item->prod_id)->first();
        //     Product::destroy($product); 
        // }   

        return redirect('/')->with('order','Order Placed Successfully Thank You');
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
     * placeorder a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    

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
