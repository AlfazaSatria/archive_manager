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

Route::post('auth', 'Auth\LoginController@validateLogin')->name("login.auth");

Route::get('/register','Auth\RegisterController@showRegistrationForm')->name("register.view");
Route::post('/register/submit', 'Auth\RegisterController@validateRegister')->name("register.auth");




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('departmens')->group(function () {
    Route::name('departments.')->group(function () {
        Route::get('index', 'DepartmentsController@index')->name('show');
        Route::get('show/add/department', 'DepartmentsController@showAddDepartment')->name('show.add.department');
        Route::post('add', 'DepartmentsController@addDepartments')->name('add');
        Route::delete('delete/{id}', 'DepartmentsController@destroy')->name('destroy');
    });
});

Route::prefix('files')->group(function (){
    Route::name('files.')->group(function (){
        Route::get('index', 'FileController@index')->name('show');
        Route::get('show/add/file', 'FileController@showAddFile')->name('show.add.file');
        Route::post('add', 'FileController@addFiles')->name('add');
        Route::delete('delete/{id}', 'FileController@destroy')->name('destroy');
    });
});