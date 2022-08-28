<?php

namespace App\Http\Controllers;




use Illuminate\Http\Request;
use App\Models\category;
use App\Models\product;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $category = Category :: all();
         $products = Product:: all();
         return view('main', compact('category', 'products'));
    }



    

    public function getProduct($category_name)
    {

        if(Category::where('category_name', $category_name)->exists()){
            $category = Category::where('category_name', $category_name)->first();
            $products = Product::where('category_id',$category->id)->get();
            return view('single', compact('category', 'products'));
        }else{
            return redirect('/singe{category_name}')->with('status', ' item dosnot exists');
        }




    }


    // public function allProduct(){

    //     $products = Product :: all();
    //     return  view('main', compact('products'));
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
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(category $category)
    {
        //
    }
}
