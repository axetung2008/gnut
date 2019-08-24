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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('them','HomeController@them');
Route::post('them','HomeController@postThem');
Route::get('duyet/{id}','HomeController@duyet');
Route::post('duyet/{id}','HomeController@postDuyet');
Route::get('sua/{id}','HomeController@sua');
Route::post('sua/{id}','HomeController@postSua');
Route::get('xoa/{id}','HomeController@xoa');



Route::get('schema/add',function(){
	Schema::table('donthuoc',function($table){
		$table->integer('gia')->nullable();
	});
});
