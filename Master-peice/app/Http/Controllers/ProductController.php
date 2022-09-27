<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\category;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product :: where('status', '1')->get();
        $category = Category :: where('status', '1')->get();
        return  view('auction', compact('products','category'));
    }

    public function sproduct($id){
        // if($product = Product :: where('id', $id)->exists()){

           

        // }else{
        //     return redirect('sproduct/{id}')->with('notexists', 'there is no item ');
        // }

       if( $product = Product :: where('id', $id)->exists()){

             
            $product = Product :: where('id', $id)->where('status', '1')->first();
            return view('sproduct', compact('product'));

       }
       else{
          
          return redirect('auction')->with('sorry', 'Sorry No Item here');

       }; 
       
      
    }

       

    // }

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
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        
                if (Auth:: user()){
                    $product = Product :: find($id);
                    if($product->max_number > $product->price){

                        $product->price = $product->price + .5;  //$request->input('input_bid');
                        $product->update();
    
                        return redirect('sproduct/'.$id)->with('success', 'your bidding successfully');

                    }else{
                        return redirect('sproduct/'.$id)->with('less', ' the price must be less than '.$product->max_number);
                    }
                  
                }else{

                    return redirect('sproduct/'.$id)->with('failed', ' failed you need to Sign in or Sign up');
                }
                

                 /*
                 if (Auth::user()){

                    if ($product->price > $product->max_number){
                    return redirect('sproduct/'.$id)->with('stop', 'your number must be less than '.$product->max_number);
                   }
                   else{

                     $product = Product :: find($id);
                     $product->price = $request->input('input_bid');
                     $product->update();

                    return redirect('sproduct/'.$id)->with('success','your bidding successfully');

                   }


                 }else{
                    return redirect('sproduct/'.$id)->with('failed', 'faild you need to ');
                    
                 }


                 
                 
                 
                 */

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(product $product)
    {
        //
    }
}
