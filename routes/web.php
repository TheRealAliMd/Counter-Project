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

Route::get('/', 'WelcomeController@index')->name('welcome');
Route::get('/teachers', 'TeacherController@index')->name('teachers');
Route::get('/display', 'PagesController@display')->name('display');
Route::get('/dispenser', 'PagesController@dispenser')->name('dispenser');
Route::get('/queue', 'PagesController@queue')->name('queue');
Route::get('/lang/{lang}{route?}', 'LangController@index');

Route::prefix('admin')->group(function(){
    Route::get('login', 'PagesController@login');
});

Route::prefix('api/v1')->group(function(){
    
    Route::prefix('teacher')->group(function(){
        Route::get('get/', 'TeacherController@get');
        Route::post('post/{fname?}{mname?}{lname?}{phonenumber?}', 'TeacherController@post');
    });
    Route::prefix('admin')->group(function(){
        Route::post('login/{username?}{password?}', 'AdminController@login');
        Route::get('call', 'AdminController@call');
        Route::get('recall', 'AdminController@recall');
        Route::get('done', 'AdminController@done');
        Route::get('skip', 'AdminController@skip');
    });
});
