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

Route::get('/', function () {
    return view('welcome');
});

Route::get('devesh', function () {
    return view('welcome');
});

Route::get('a','EmployeeController@create');//@ is method
Route::get('/','EmployeeController@display');

Route::get('/','ConditionalController@aif');
Route::get('/','ConditionalController@aelse');
Route::get('/','ConditionalController@aelseif');

//DB controller
Route::get('db/insert','DbController@insert');
Route::get('db/display','DbController@display');
Route::get('db/update','DbController@update');
Route::get('db/delete','DbController@delete');

//curd contoller
Route::get('curd/create','CurdController@create');
Route::post('curd/insert','CurdController@save');
Route::get('curd/display','CurdController@display');
Route::get('curd/show/{id}','CurdController@show');
Route::get('curd/delete/{id}','CurdController@delete');
Route::get('curd/edit/{id}','CurdController@edit');
Route::post('curd/update','CurdController@update');

//banner contoller
Route::get('banner/create','BannerController@create');
Route::post('banner/insert','BannerController@save');
Route::get('banner/display','BannerController@display');
Route::get('banner/show/{id}','BannerController@show');
Route::get('banner/delete/{id}','BannerController@delete');
Route::get('banner/edit/{id}','BannerController@edit');
Route::post('banner/update','BannerController@update');

//Department
Route::get('image/create','DepartmentController@create');
Route::post('image/insert','DepartmentController@save');
Route::get('image/display','DepartmentController@display');
Route::get('image/delete/{id}','DepartmentController@delete');
Route::get('image/edit/{id}','DepartmentController@edit');
Route::post('image/update','DepartmentController@update');

