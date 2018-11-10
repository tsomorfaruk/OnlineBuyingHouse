<?php

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
/*FrontEnd controller start*/
Route::get('/', 'FrontEnd\WellcomeController@index');
Route::get('/about-us', 'FrontEnd\WellcomeController@aboutUs');
/*FrontEnd controller end*/



/*Admin Controller start*/
Auth::routes();
Route::get('/dashboard', 'HomeController@index')->name('home');
Route::group(['middleware'=>'AuthenticateMiddleware'],function (){
    /*Category Info*/
    Route::get('/category/add','CategoryController@createCategory');
    Route::post('/category/save','CategoryController@storeCategory');
    Route::get('/category/manage', 'CategoryController@manageCategory');
    Route::get('/category/edit/{id}', 'CategoryController@editCategory');
    Route::post('/category/update', 'CategoryController@updateCategory');
    Route::get('/category/delete/{id}', 'CategoryController@deleteCategory');
});
/*Admin Controller end*/





































