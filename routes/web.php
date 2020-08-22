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

Route::get('/', 'MainPageController@mainLayout');

Route::get('/checkout/payment','PaymentController@index');

Route::post('ajaxRequest','ProductController@ajaxIndex')->name('ajaxRequestIndex');
Route::get('/pd/{name}_{id}.htm', 'ProductController@index')->where(['id' => '[0-9]+', 'name' => '[A-za-z\-\.]+']);

Route::get('/c/{category_name}.htm','CategoryController@getProductList')->where('category_name','[A-za-z\_.]+');
Route::get('/c/ajax/{category_name}.htm','CategoryController@getProductListPaging')->where('category_name','[A-za-z\/_.]+');
Route::get('/pd/ajaxfetchReview/{id}','ReviewController@ajaxfetchReview')->where(['id'=>'[0-9]+']);
Route::post('ajaxsubmitReview','ReviewController@ajaxsubmitReview')->name('ajaxReqsubmit');

Route::get('ajaxbrandlist','FilterController@ajaxproductList')->name('ajaxProbrandlist');
Route::get('pricelist','FilterController@priceList')->name('ajaxpricelist');

Route::resource('cart','CartController');
Route::post('/cart','CartController@store')->name('cart.redir')->middleware('check.cookie');


Route::resource('checkout','CheckoutController');
// Route::post('checkout/payment','CheckoutController@payment')->name('payment');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('checkout/payment','CustomerController@guestCustomer')->name('payment');
Route::get('{dest_link}.htm','BrandController@getProductListPagingTest')->where('dest_link','[A-za-z\-\.]+');
Route::get('ajax/{dest_link}.htm','BrandController@getProductListPaging')->where('dest_link','[A-za-z\/_.]+');
Route::get('/contact','MainPageController@contactUs');
Route::get('/getcaptcha','ReviewController@getCaptcha');
Route::post('/update','CartController@update')->name('cartupdate');
Route::post('/delete','CartController@deleteCartDetial')->name('cartdelete');
Route::get('/about','MainPageController@aboutUs');
Route::post('/headercartupdate','CartController@ajaxheaderUpdateCart')->name('headercartupdate');
Route::post('/headercartdelete','CartController@ajaxheaderDeleteCart')->name('headercartdelete');

Route::post('/add_new_shipping.htm','PaymentController@addnewCustomerAddress');
Route::post('/get_cust_address.htm','PaymentController@getCustomerAddress');
Route::post('/update_guest.htm','PaymentController@updateGuestCustomer');
// Route::post('/add_new_shipping.htm','PaymentController@addnewShipping');

