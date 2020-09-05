<?php

use Illuminate\Support\Facades\Route;
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

Route::group( ['prefix' => 'dashboard' ]  , function(){

    Route::get('/', function () {
        return view('dashboard.index');
    });



  Route::get('slides', 'SlideController@index');
  Route::get('slides/create', 'SlideController@create');
  Route::post('slides', 'SlideController@store');
  Route::get('slides/{slide}', 'SlideController@show');
  Route::get('slides/{slide}/edit', 'SlideController@edit');
  Route::PATCH('slides/{slide}', 'SlideController@update');
  Route::DELETE('slides/{slide}', 'SlideController@destroy');

  /* Categories Route */

  Route::get('categories', 'CategoryController@index');
  Route::get('categories/create', 'CategoryController@create');
  Route::post('categories', 'CategoryController@store');
  Route::get('categories/{category}/edit', 'CategoryController@edit');
  Route::PATCH('categories/{category}', 'CategoryController@update');
  Route::DELETE('categories/{category}', 'CategoryController@destroy');

  /* Brands Route */
  Route::get('brands', 'BrandController@index');
  Route::get('brands.create', 'BrandController@create');
  Route::post('brands', 'BrandController@store');
  Route::get('brands/{brand}/edit', 'BrandController@edit');
  Route::PATCH('brands/{brand}', 'BrandController@update');
  Route::DELETE('brands/{brand}', 'BrandController@destroy');

    /* Users Route */
    Route::get('users', 'UserController@index');
    Route::get('users.create', 'UserController@create');
    Route::post('users', 'UserController@store');
    Route::get('users/{user}/edit', 'UserController@edit');
    Route::PATCH('users/{user}', 'UserController@update');
    Route::DELETE('users/{user}', 'UserController@destroy');

    /* Products Route */
    Route::get('products', 'ProductController@index');
    Route::get('products.create', 'ProductController@create');
    Route::post('products', 'ProductController@store');
  Route::get('products/{product}', 'ProductController@show');
    Route::get('products/{product}/edit', 'ProductController@edit');
    Route::PATCH('products/{product}', 'ProductController@update');
    Route::DELETE('products/{product}', 'ProductController@destroy');

});

/* Slides Route */

// Route::get('dashboard/login' , 'AdminAuthController@loggin_view');
// Route::post('dashboard/login' , 'AdminAuthController@login');


//
// Route::resources([
//     'dashboard/users' => 'UserController',
// ]);
//






Route::get('/', function () {
    return view('index');
});

Route::get('/product', function () {
    return view('interface.product');
});


Route::get('/shoes-section', function () {
    return view('interface.shoes-section');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
