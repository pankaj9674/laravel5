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

//Route::get('/home/{id}/{val}', function ($id,$val) {
//
//    return "The returned value is $id $val";
//    return view('welcome');
//});

Route::get('/home/{id?}', function ($id=NULL) {

  //  return "The returned value is $id";
    return view('welcome');
})->name('home');
/////////////////////////////////////////////////////////////////////////////
Route::get('/login', function () {

  //  return "The returned value is $id";
    return view('login');
})->name('login')->middleware('checkstring');


Route::get('api/login', function () {

  //  return "The returned value is $id";
    return view('login');
})->name('login')->middleware('checkstring');
///////////////////////////////////////////////////////////////////////
Route::get('/logout', function () {

  //  return "The returned value is $id";
    return view('logout');
})->name('logout');
////////////////////////////////////////////////////////////////////////
