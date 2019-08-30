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

//Route::get('/', function () {
//return 'Sajeeb'.' '.'barai';
/* $data=[
  '0'=>[
  'name'=>'Sajeeb',
  'city'=>'dhaka'
  ],
  '1'=>[
  'name'=>'Barai',
  'city'=>'dhaka'
  ]
  ];
  return $data; */
//return view('demo');
//return view('welcome');
//});
Route::get('/', 'welcomeController@index');
Route::get('/category-view/{id}', 'welcomeController@category');
Route::get('/contact', 'welcomeController@contact');
Route::get('/product-details/{id}', 'welcomeController@productDetails');
Route::post('/cart/add', 'CartController@addToCart');
Route::get('/cart/show', 'CartController@showCart');
Route::get('/cart/delete/{id}', 'CartController@deleteCartProduct');

Route::get('/checkout', 'CheckoutController@index');
Route::post('/checkout/sign-up', 'CheckoutController@customerRegistration');
Route::get('/checkout/shipping', 'CheckoutController@showShippingForm');
Route::post('/checkout/save-shipping', 'CheckoutController@saveShippingInfo');
Route::get('/checkout/payment', 'CheckoutController@showPaymentForm');
Route::post('/checkout/save-order', 'CheckoutController@saveOrderInfo');
Route::get('/checkout/my-home', 'CheckoutController@customerHome');

Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('dashboard');


Route::group(['middleware' => 'AuthenticateMiddleware'], function() {
    /* category Info */
    Route::get('/category/add', 'CategoryController@createCategory')->middleware('AuthenticateMiddleware');
    Route::post('/category/save', 'CategoryController@storeCategory');
    Route::get('/category/manage', 'CategoryController@manageCategory');
    Route::get('/category/edit/{id}', 'CategoryController@editCategory');
    Route::post('/category/update', 'CategoryController@updateCategory');
    Route::get('/category/delete/{id}', 'CategoryController@deleteCategory');

    /* category Info */

    /* manufacturer Info */

    Route::get('/manufacturer/add', 'ManufacturerController@createCategory');
    Route::post('/manufacturer/save', 'ManufacturerController@storeCategory');
    Route::get('/manufacturer/manage', 'ManufacturerController@manageCategory');
    Route::get('/manufacturer/edit/{id}', 'ManufacturerController@editCategory');
    Route::post('/manufacturer/update', 'ManufacturerController@updateCategory');
    Route::get('/manufacturer/delete/{id}', 'ManufacturerController@deleteCategory');

    /* manufacturerInfo */

    /* Product Info */
    Route::get('/product/add', 'ProductController@createProduct');
    Route::post('/product/save', 'ProductController@storeProduct');
    Route::get('/product/manage', 'ProductController@manageProduct');
    Route::get('/product/view/{id}', 'ProductController@viewProduct');
    Route::get('/product/edit/{id}', 'ProductController@editProduct');
    Route::post('/product/update', 'ProductController@updateProduct');
    Route::get('/product/delete/{id}', 'ProductController@deleteProduct');

    /* Product Info */
    
    /* User Info */
    Route::get('/user/add', 'UserController@createUser');
    Route::post('/user/save', 'UserController@storeUser');
    Route::get('/user/manage', 'UserController@manageUser');
    Route::get('/user/view/{id}', 'UserController@viewUser');
    Route::get('/user/edit/{id}', 'UserController@editUser');
    Route::post('/user/update', 'UserController@updateUser');
    Route::get('/user/delete/{id}', 'UserController@deleteUser');

    /* User Info */
});
