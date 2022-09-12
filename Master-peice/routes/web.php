<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//   Route::get('/', function () {
//      return view('main');
//   });



// Route::get('/home', function () {
//     return view('main');
// });



// Route::get('/auction', function () {
//     return view('auction');
// });


Route::get('/contact', function () {
    return view('contact');
});

// Route::get('/contact', function () {
//     return view('contact');
// });


// Route::get('/single', function () {
//      return view('single');
//  });



// Route::get('profile',function (){
//     return view('profile');
// });

//  Route::get('/single',function (){
//          return view('single');
//  });
// Route::get('auction/{category_name}',[CategoryController::class,'getProduct']);
Route::resource('spro',ProductController::class);
Route::get('sproduct/{id}',[ProductController::class, 'sproduct']);

Route::get('/auction',[ProductController::class,'index']);
Route::get('single/{category_name}',[CategoryController::class,'getProduct']);


// display when user not login
Route::get('/',[CategoryController::class,'index']); 
// Route::get('/',[CategoryController::class,'allProduct']); 
// Route::get('/',[ProductController::class,'index']);

Route::resource('prof',ProfileController::class);



Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/admin', [App\Http\Controllers\HomeController::class, 'dashboard']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'category'])->name('home');
Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index']);



Route::middleware(['auth', 'isAdmin'])->group(function (){
    Route::get('/dashboard', function (){
        return view('dashboard.index');
      });
});