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

/*Buyer controller start*/

Route::get('/buyer/register','Buyer\BuyerController@register');
Route::post('/buyer/store','Buyer\BuyerController@store');
Route::get('/buyer/login','Buyer\BuyerController@showLoginForm');
Route::post('/buyer/login','Buyer\BuyerController@login');
Route::get('/buyer/logout','Buyer\BuyerController@logout');
Route::get('/buyer/dashboard','Buyer\BuyerController@index');
Route::get('/buyer/post-job','Buyer\PostController@createPost');
Route::post('/buyer/post/save','Buyer\PostController@savePost');
Route::get('/buyer/post/manage','Buyer\PostController@managePost');
Route::get('/buyer/post/edit/{id}','Buyer\PostController@editPost');
Route::post('/buyer/post/update','Buyer\PostController@updatePost');
Route::get('/buyer/post/delete/{id}','Buyer\PostController@deletePost');

/*Buyer controller end*/

/*Gowner Controller start*/
Route::get('/gowner/register','Gowner\GownerController@register');
Route::post('/gowner/store','Gowner\GownerController@store');
Route::get('/gowner/login','Gowner\GownerController@showLoginForm');
Route::post('/gowner/login','Gowner\GownerController@login');
Route::get('/gowner/logout','Gowner\GownerController@logout');
Route::get('/gowner/dashboard','Gowner\GownerController@index');
Route::get('/gowner/my-profile','Gowner\ProfileController@index');
Route::get('/gowner/update-profile','Gowner\ProfileController@createProfile');
Route::post('/gowner/profile/save','Gowner\ProfileController@storeProfile');
Route::get('/gowner/my-portfolio','Gowner\ProfileController@portfolioProfile');
Route::post('/gowner/profile/save-portfolio','Gowner\ProfileController@savePortfolio');

/*Gowner Controller Ens*/


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





































