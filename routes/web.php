<?php

use App\Http\Controllers\BannerController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SslCommerzPaymentController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ManufactureController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SliderController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[MainController::class,'homepage']);
Route::get('/user/category/{id}',[MainController::class,'categorybypage'])->name('categoryby');
Route::get('/user/brand/{id}',[MainController::class,'brandby'])->name('uniqbrand.page');
Route::get('/user/product/view/{id}',[MainController::class,'viewproduct'])->name('product.view');
Route::post('/user/product/cart/{id}',[CartController::class,'addcart'])->name('allcart');
Route::get('/user/addchart/newpage',[CartController::class,'newchart'])->name('chart.new');
Route::get('/user/cart/delete/{id}',[CartController::class,'delete'])->name('cart.delete');




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home/admin',[HomeController::class,'adminpage'])->name('admin.page')->middleware('isAdmin');


//category

Route::get('Admin/category',[CategoryController::class,'addcategorypage'])->name('addcategory');
Route::post('Admin/category/add',[CategoryController::class,'addcategory'])->name('categoryadd');
Route::get('Admin/categroy/show',[CategoryController::class,'showcategory'])->name('categoryshow');
Route::get('Admin/cetegory/unactive/{id}',[CategoryController::class,'unactive'])->name('unactive.cetegory');
Route::get('Admin/cetegory/active/{id}',[CategoryController::class,'active'])->name('active.cetegory');
Route::get('Admin/category/delete/{id}',[CategoryController::class,'delete'])->name('category.delete');

//menufacture

Route::get('Admin/manufacture',[ManufactureController::class,'addmanufacture'])->name('manufacture.page');
Route::post('Admin/manufacture/insert',[ManufactureController::class,'insert'])->name('minsert');
Route::get('Admin/manufacture/show',[ManufactureController::class,'index'])->name('show.manufacture');
Route::get('Admin/manufacture/unactive/{id}',[ManufactureController::class,'unactive'])->name('unactive.manufacture');
Route::get('Admin/manufacture/active/{id}',[ManufactureController::class,'active'])->name('active.manufacture');
Route::get('Admin/manufacture/delete/{id}',[ManufactureController::class,'delete'])->name('manufacture.delete');

//products
Route::get('Admin/product/add',[ProductController::class,'addpage'])->name('product.add');
Route::post('Admin/product/upload',[ProductController::class,'upload'])->name('product.upload');
Route::get('Admin/product/show',[ProductController::class,'showData'])->name('product.show');
Route::get('Admin/product/unactive/{id}',[ProductController::class,'unactive'])->name('product.unactive');
Route::get('Admin/product/active/{id}',[ProductController::class,'active'])->name('product.active');
Route::get('Admin/product/delete/{id}',[ProductController::class,'delete'])->name('product.delete');
Route::get('Admin/product/update/page/{id}',[ProductController::class,'updatePage'])->name('product.updatepage');
Route::post('Admin/product/edit/{id}',[ProductController::class,'edit'])->name('product.update');


//Slider

Route::get('/slider/addpage',[SliderController::class,'sliderpage'])->name('slider.page');
Route::post('/slider/insert',[SliderController::class,'slideradd'])->name('slider.add');
Route::get('/slider/show',[SliderController::class,'slidershow'])->name('slider.show');
Route::get('/slider/unactive/{id}',[SliderController::class,'unactive'])->name('slider.unactive');
Route::get('/slider/active/{id}',[SliderController::class,'active'])->name('slider.active');
Route::get('/slider/delete/{id}',[SliderController::class,'delete'])->name('slider.delete');


//Banner

Route::get('/banner/addpage',[BannerController::class,'sliderpage'])->name('banner.page');
Route::post('/banner/insert',[BannerController::class,'slideradd'])->name('banner.add');
Route::get('/banner/show',[BannerController::class,'slidershow'])->name('banner.show');
Route::get('/banner/unactive/{id}',[BannerController::class,'unactive'])->name('banner.unactive');
Route::get('/banner/active/{id}',[BannerController::class,'active'])->name('banner.active');
Route::get('/banner/delete/{id}',[BannerController::class,'delete'])->name('banner.delete');



// SSLCOMMERZ Start

//Route::get('/user/payment',[CartController::class,'showpayment'])->name('payment.show');

Route::get('/userpayment', [SslCommerzPaymentController::class, 'exampleEasyCheckout'])->name('payment.show');
Route::get('/example2', [SslCommerzPaymentController::class, 'exampleHostedCheckout']);

Route::post('/pay', [SslCommerzPaymentController::class, 'index']);
Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);

Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
//SSLCOMMERZ END
