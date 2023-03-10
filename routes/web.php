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
// Route::get('/', function() {
//     return view('vintari.welcome');
// });
Route::get('/', 'Vintari\HomeController@langChange')->name('lang');
Route::get('/about', 'Vintari\HomeController@about')->name('about');
Route::get('/product/{country_id?}', 'Vintari\HomeController@product')->name('product');
Route::post('/product/{country_id?}', 'Vintari\HomeController@productPost')->name('product_post');
Route::get('/activity', 'Vintari\HomeController@activity')->name('activity');
Route::get('/faq', 'Vintari\HomeController@faq')->name('faq');
Route::get('/contact', 'Vintari\HomeController@contact')->name('contact');
Route::get('/single-product/{var}', 'Vintari\HomeController@singleProduct')->name('single-product');
Route::get('/single-activity/{var}', 'Vintari\HomeController@singleActivity')->name('single-activity');
Route::post('/contact', 'Vintari\HomeController@contact')->name('send_message');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/storage-link', function() {
    Artisan::call('storage:link');
});
Route::group(['middleware' => 'auth'], function () {
    Route::prefix('admin/vintari/')->name('admin.vintari.')->group(function () {
        Route::post('data', 'Vintari\AdminController@dataTable')->name('data');
        Route::post('load-data', 'Vintari\AdminController@loadData')->name('load-data');
        Route::get('create/{var}', 'Vintari\AdminController@create')->name('create');
        Route::get('download-excel/{var}', 'Vintari\AdminController@exportExcel')->name('download-excel');
        Route::post('create/upload-photo/{var}', 'Vintari\AdminController@uploadFile')->name('upload-photo');
        Route::post('get-select-option', 'Vintari\AdminController@getSelectOption')->name('get-select-option');
        Route::get('change/lang', 'Vintari\AdminController@langChange')->name('lang');
    });
    Route::prefix('admin')->name('admin.')->group(function () {
        Route::resource('vintari', 'Vintari\AdminController')->except(['create']);
    });
});
