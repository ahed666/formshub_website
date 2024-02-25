<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\IndexController;
use App\http\Controllers\PricingController;
use App\http\Controllers\KnowledgeBaseController;
use App\http\Controllers\ContactController;
use App\http\Controllers\ProductController;
use App\Http\Controllers\LocaleController;
use Illuminate\Support\Facades\Redirect;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// home
Route::get('/',[App\Http\Controllers\IndexController::class,'index'])->name('home');
// pricing
Route::get('/pricing', [App\Http\Controllers\PricingController::class,'index'])->name('pricing');
// features
Route::get('/features', function () {
    return view('features');
})->name('features');
// contact us
Route::get('/contact', [App\Http\Controllers\ContactController::class,'index'])->name('contact');
// knowledgebase
Route::get('/knowledgebase/{id?}', [App\Http\Controllers\KnowledgeBaseController::class,'index'])->name('knowledgebase');
// send email
Route::post('/sendemail', [App\Http\Controllers\ContactController::class,'sendEmail'])->name('sendemail');

// products
Route::get('/products', [App\Http\Controllers\ProductController::class,'index'])->name('products');
Route::post('/neworder', [App\Http\Controllers\ProductController::class,'orderProduct'])->name('neworder');

Route::post('/orderproduct', [App\Http\Controllers\ProductController::class,'orderProduct'])->name('orderproduct');


  // change language
  Route::get('setlocale/{locale}',[App\Http\Controllers\LocaleController::class, 'setLocale'])->name('setLocale');

//terms and conditions
Route::get('/termsandconditions',function()
{


     return view('termsandconditions');
}
)->name('terms_conditions');
//privacy policy
Route::get('/privacypolicy',function()
{

    return view('privacypolicy');
}
)->name('privacypolicy');



Route::get("sitemap.xml" , function () {
    return \Illuminate\Support\Facades\Redirect::to('sitemap.xml');
     });
