<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\product;
use App\Models\category;

class ProdAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() 
    {

        $product = Product::all();
        return view('dashboard.product.prodAdmin', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {  
        $category = Category::all();
        return view('dashboard.product.addproduct', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product();

        if($request->hasfile('image')){
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('images', $filename);
            $product->product_image = $filename;
        }

        if( $request->input('max_price') > $request->input('price')){

            $product->product_name = $request->input('name');
            $product->price = $request->input('price');
            $product->max_number = $request->input('max_price');
            $product->product_desc = $request->input('description'); 
            $product->status = $request->input('Status') == TRUE ? '1' : '0'; 
            $product->category_id = $request->input('cate_id');
            $product->created_at = $request->input('date');
            // $product->created_at = $request->input('time');
    
    
            $product->save();
    
            return redirect('prodAdmin')->with('status','Product Added Successfully');
                   
        }else{
            return redirect('prodAdmin')->with('status','Max Price Must be greater than price');
        }
      

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
        $product = Product::find($id);
        $category = Category::all();
        return view('dashboard.product.editproduct', compact('product', 'category'));
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
        $product =  Product::find($id);

        if($request->hasfile('image')){
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('images', $filename);
            $product->product_image = $filename;
        }

       if( $request->input('max_price') > $request->input('price')){

        $product->product_name = $request->input('name');
        $product->price = $request->input('price');
        $product->max_number = $request->input('max_price');
        $product->product_desc = $request->input('description'); 
        $product->status = $request->input('Status') == TRUE ? '1' : '0'; 
        // $product->category_id = $request->input('cate_id');
        $product->created_at = $request->input('date');
        // $product->created_at = $request->input('time');


        $product->update();

        return redirect('prodAdmin')->with('status','Product Edited Successfully');

       }
       else{
        return redirect('prodAdmin')->with('status','Max Price Must be greater than price');
       }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();

        return redirect('prodAdmin')->with('status','Product Deleted');

    }
}
