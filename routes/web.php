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

Route::get('/', function () {
    return view('index');
});
Route::get('missionandvision', function(){
	return view('misvis');
});
Route::get('aboutus', function(){
	return view('aboutus');
});
Route::get('contactus', function(){
	return view('contactus');
});
Route::get('currentprojects', function(){
	return view('currentprojects');
});
