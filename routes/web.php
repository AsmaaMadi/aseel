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

Route::resource('/employee','EmployeeController');
Route::resource('/departement','DepartementController');
Route::resource('/salary','SalaryController');
Route::resource('/title','TitleController');
Route::resource('/manager','ManagerController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
