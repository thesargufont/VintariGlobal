<?php
     Route::prefix('admin/vintari/')->name('admin.vintari.')->group(function () {
        Route::post('data', 'Vintari\AdminController@dataTable')->name('data');
        Route::pos('load-data', 'Vintari\AdminController@loadData')->name('load-data');
        Route::get('create/{var}', 'Vintari\AdminController@create')->name('create');
     });
      
    Route::prefix('admin')->name('admin.')->group(function () {
        Route::resource('vintari', 'Vintari\AdminController');
    });