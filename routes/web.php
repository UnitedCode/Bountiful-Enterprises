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

Route::get('/', 'PagesController@index')->name('home');
Route::get('projects', 'PagesController@projects')->name('projects');
Route::get('about', 'PagesController@about')->name('about');
Route::get('contact', 'PagesController@contact')->name('contact');

Route::prefix('services')->group(function () {
    Route::get('detailing', 'ServicesController@detailing')->name('detailing');
    Route::get('fabrication', 'ServicesController@fabrication')->name('fabrication');
    Route::get('shipping', 'ServicesController@shipping')->name('shipping');
    Route::get('erecting', 'ServicesController@erecting')->name('erecting');
    Route::get('quality-control', 'ServicesController@qualityControl')->name('quality-control');
});

Route::prefix('admin')->group(function () {
   Auth::routes();
   Route::get('/', function() {return redirect('/admin/login');})->name('login');

   Route::middleware('auth')->group(function() {
       Route::get('logout', 'Auth\LoginController@logout')->name('logout');

       Route::get('projects', 'Admin\ProjectsController@index')->name('admin-projects');
       Route::get('projects/create', 'Admin\ProjectsController@create')->name('create-project');
       Route::post('projects/create', 'Admin\ProjectsController@store')->name('store-project');
       Route::get('projects/edit/{project}', 'Admin\ProjectsController@edit')->name('edit-project');
       Route::post('projects/edit/{project}', 'Admin\ProjectsController@update')->name('update-project');
       Route::post('projects/delete/{project}', 'Admin\ProjectsController@destroy')->name('delete-project');

       Route::get('years', 'Admin\YearsController@index')->name('admin-years');
       Route::get('years/create', 'Admin\YearsController@create')->name('create-year');
       Route::post('years/create', 'Admin\YearsController@store')->name('store-year');
       Route::get('years/edit/{year}', 'Admin\YearsController@edit')->name('edit-year');
       Route::post('years/edit/{year}', 'Admin\YearsController@update')->name('update-year');
       Route::post('years/delete{year}', 'Admin\YearsController@delete')->name('delete-year');

   });
});