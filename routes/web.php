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
    return view('forms');
});

// Route::get('form', function(){
//     return view('forms');
// });

//Route::get('forms', 'FormController@index')->name('forms');
Route::post('/', 'FormController@index');