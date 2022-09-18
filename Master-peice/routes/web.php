<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;

use App\Http\Controllers\ContactController;

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


// Route::get('/contact', function () {
//     return view('contact');
// });

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
Route::resource('cont', ContactController::class);
Route::get('contactus', [ContactController::class, 'index']);

Route::get('abbout', [App\Http\Controllers\AboutController::class, 'index']);



Route::resource('spro',ProductController::class);
Route::get('sproduct/{id}',[ProductController::class, 'sproduct']);

Route::get('/auction',[ProductController::class,'index']);
Route::get('single/{category_name}',[CategoryController::class,'getProduct']);
// Route::get('single/{category_name}',[CategoryController::class,'footer']);


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
    Route::get('/dashboard', [App\Http\Controllers\Admin\AdminController::class, 'dashboard']);

    Route::get('/cateAdmin', [App\Http\Controllers\Admin\CateAdminController::class, 'cateAdmin']);

    Route::get('/add_category', [App\Http\Controllers\Admin\CateAdminController::class, 'create']);

    Route::resource('add_cate',App\Http\Controllers\Admin\CateAdminController::class );

    Route::resource('edit_category',App\Http\Controllers\Admin\CateAdminController::class );

    Route::resource('edit', App\Http\Controllers\Admin\CateAdminController::class );

    Route::resource('deletecate', App\Http\Controllers\Admin\CateAdminController::class );

    Route::get('/prodAdmin', [App\Http\Controllers\Admin\ProdAdminController::class, 'index']);

    Route::resource('deleteprod', App\Http\Controllers\Admin\ProdAdminController::class );

    Route::get('/add_product', [App\Http\Controllers\Admin\ProdAdminController::class, 'create']);

    Route::resource('add_prod', App\Http\Controllers\Admin\ProdAdminController::class );

    Route::get('edit_product/{id}', [App\Http\Controllers\Admin\ProdAdminController::class, 'edit']);

    Route::resource('edit_prod', App\Http\Controllers\Admin\ProdAdminController::class );

    Route::get('contact', [App\Http\Controllers\Admin\ContactController::class, 'index']);

    Route::resource('remove', App\Http\Controllers\Admin\ContactController::class );
   
    Route::get('users', [App\Http\Controllers\Admin\UserAdminController::class, 'index']);

    Route::get('add_user', [App\Http\Controllers\Admin\UserAdminController::class, 'create']);

    Route::resource('add_users', App\Http\Controllers\Admin\UserAdminController::class );

    Route::resource('deleteuser', App\Http\Controllers\Admin\UserAdminController::class );


    Route::get('aboutus', [App\Http\Controllers\Admin\AboutrAdminController::class, 'index']);

    Route::get('add_about', [App\Http\Controllers\Admin\AboutrAdminController::class, 'create']);

    Route::resource('addabout', App\Http\Controllers\Admin\AboutrAdminController::class );

    Route::get('edit_about/{id}', [App\Http\Controllers\Admin\AboutrAdminController::class, 'edit']);


    Route::resource('editabout', App\Http\Controllers\Admin\AboutrAdminController::class );

    

     
});

