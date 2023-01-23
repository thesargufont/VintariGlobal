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
Route::get('/', function() {
    return view('welcome');
});
Route::get('/admin/vintari', function () {
    return view('vintari.admin.index');
});

Route::prefix('admin/vintari/')->name('admin.vintari.')->group(function () {
    Route::post('data', 'Vintari\AdminController@dataTable')->name('data');
    Route::post('load-data', 'Vintari\AdminController@loadData')->name('load-data');
    Route::get('create/{var}', 'Vintari\AdminController@create')->name('create');
    Route::post('create/upload-photo/{var}', 'Vintari\AdminController@uploadFile')->name('upload-photo');
});
  
Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('vintari', 'Vintari\AdminController')->except(['create']);
});
