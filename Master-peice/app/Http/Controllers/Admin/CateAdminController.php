<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\category;

class CateAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function cateAdmin()
    {
        $category = Category::all();
        
        return view('dashboard.category.cateAdmin', compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.category.addcategory');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = new Category();
        if($request->hasfile('image')){
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('images', $filename);
            $category->category_image = $filename;
        }

        $category->category_name = $request->input('name');
        $category->category_description = $request->input('description');
        $category->status = $request->input('Status') == TRUE ? '1':'0';

        $category->save();

        return redirect('cateAdmin')->with('status', 'Category Add Successfully');


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
        $category = Category:: find($id);
        return view('dashboard.category.editcategory', compact('category'));
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
        $category = Category:: find($id);

        // if($request->hasfile('image')){
        //     $path = 'images/'.$category->category_image;
        //     if(File::exists($path))
        //     {

        //         File::delete($path);
        //     }

        //     $file = $request->file('image');
        //     $ext = $file->getClientOriginalExtension();
        //     $filename = time().'.'.$ext;
        //     $file->move('images', $filename);
        //     $category->category_image = $filename;


        // }
        if($request->hasfile('image')){
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('images', $filename);
            $category->category_image = $filename;
        }

        $category->category_name = $request->input('name');
        $category->category_description = $request->input('description');
        $category->status = $request->input('Status') == TRUE ? '1':'0';

        $category->update();

        return redirect('cateAdmin')->with('status', 'Category Editing Successfully');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();

        return redirect('cateAdmin')->with('status', 'Category Deleted');
    }
}
