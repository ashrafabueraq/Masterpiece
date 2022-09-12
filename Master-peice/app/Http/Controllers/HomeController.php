<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;
use App\Models\product;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('main');
    }

    // public function dashboard()
    // {
    //     return view('dashboard.admin');
    // }

    public function category(){

        $category = Category :: all();
        $products = Product :: all();
        return view('main', compact('category','products'));
    }

   
}

