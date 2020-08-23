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

Route::get('/',function(){
	 App::setlocale('en');
	 $locale='en';
	 return view('welcome',compact('locale'));
});


Route::get('/{locale}',function($locale){

   // Locale will go to the Welcome Jquery page

   App::setlocale($locale);
   return view('welcome',compact('locale'));
});