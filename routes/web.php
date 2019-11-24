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
//FRontend
Route::get('/','FrontendController@home');
Route::get('/abouts','FrontendController@about');
Route::get('/products','FrontendController@product');
Route::get('/delivery','FrontendController@delivary');
Route::get('/payment','FrontendController@payment');
Route::get('/faq','FrontendController@faq');
Route::get('/contact','FrontendController@contact');

Auth::routes(['register' => false]);

Route::group(['middleware' => 'auth'], function () {
Route::get('/admin','DashboardController@dashboard');
Route::get('logout','DashboardController@logout')->name('logout');
Route::get('/home', 'HomeController@index')->name('home');
Route::post('/quickmail','DashboardController@quickmail');
Route::get('view-all-mails','DashboardController@view');
Route::get('/deletemail/{id}','DashboardController@del');

//Carousel
Route::get('/carousel-add','CarouselController@add');
Route::get('/carousel-view','CarouselController@view');
Route::post('/storecarousel','CarouselController@store');
Route::post('/statuscar/{id}','CarouselController@statusupdate');
Route::get('/deletecar/{id}','CarouselController@delete');

//ADMIN
Route::get('/view-all-admin','AdminController@adminshow');
Route::get('/addadmin','AdminController@add');
Route::post('/storeadmin','AdminController@storeadmin');
Route::get('/deleteadmin/{id}','AdminController@delete');


//ABOUT
Route::get('/abouts-add','AboutController@add');
Route::post('/storeabout','AboutController@store');
Route::get('/abouts-view','AboutController@view');
Route::post('/updateabout','AboutController@update');


//DELIVARY AND SHIPMENT
Route::get('/delivary-add','DelivaryController@add');
Route::get('/delivary-view','DelivaryController@view');
Route::post('/storedelivary','DelivaryController@store');
Route::get('/deletedelivary/{id}','DelivaryController@delete');
Route::post('/updatedelivary/{id}','DelivaryController@update');


//FAQ
Route::get('/faq-add','FAQController@add');
Route::get('/faq-view','FAQController@view');
Route::post('/storefaq','FAQController@store');
Route::get('/deletefaq/{id}','FAQController@delete');
Route::post('/updatefaq/{id}','FAQController@update');

//Payment
Route::get('/payment-add','PaymentController@add');
Route::get('/payment-view','PaymentController@view');
Route::post('/storepayment','PaymentController@store');
Route::get('/deletepayment/{id}','PaymentController@delete');
Route::post('/updatepayment/{id}','PaymentController@update');

Route::get('/add-seo','SEOCOntroller@add');
Route::get('/view-seo','SEOCOntroller@view');
Route::post('/seostore','SEOCOntroller@store');
Route::get('/editseo/{id}','SEOCOntroller@edit');
Route::post('/updateseo/{id}','SEOCOntrollerr@updateseo');
Route::get('/deleteseo/{id}','SEOCOntroller@delete');



Route::get('/createcontact','ContactController@addcontact');
Route::get('/inbox','ContactController@contact');
Route::get('/replies','ContactController@reply');
Route::get('/replycontact/{id}','ContactController@replyform');
Route::post('/storecontact','ContactController@store');
Route::post('/storereply/{id}','ContactController@storereply');
Route::get('/deleteinbox/{id}','ContactController@deleteinbox');
Route::get('/deletereply/{id}','ContactController@deletereply');

//Product
Route::get('/product-add','ProductController@add');
Route::post('/storeproduct','ProductController@store');
Route::get('/product-view','ProductController@view');
Route::get('/statusproduct/{id}','ProductController@status');
Route::post('/productupdate/{id}','ProductController@update');
Route::get('/deleteproduct/{id}','ProductController@deleteproduct');

//Category
Route::get('/category-add','CategoryController@add');
Route::post('/storecategory','CategoryController@store');
Route::get('/category-view','CategoryController@view');
Route::post('/categorystatus/{id}','CategoryController@status');
Route::post('/updatecategory/{id}','CategoryController@update');
Route::get('/deletecategory/{id}','CategoryController@delete');
});