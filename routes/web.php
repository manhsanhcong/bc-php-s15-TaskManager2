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

Route::prefix('customer')->group(function () {
    Route::get('index', function () {
        return view('modules.customer.index');
    });

    Route::get('create1', function () {
        return view('modules.view.view1');
    })->name('view1');

    Route::get('create2', function () {
        return view('modules.view.view2');
    })->name('view2');

    Route::get('create3', function () {
        return view('modules.view.view3');
    })->name('view3');

    Route::get('create4', function () {
        return view('modules.view.view4');
    })->name('view4');

    Route::get('create5', function () {
        return view('modules.view.view5');
    })->name('view5');

    Route::post('store', function () {

    });

    Route::get('{id}/show', function () {

    });

    Route::get('edit1', function () {
        return view('modules.edit.edit1');
    })->name('edit1');

    Route::get('edit2', function () {
        return view('modules.edit.edit2');
    })->name('edit2');

    Route::get('edit3', function () {
        return view('modules.edit.edit3');
    })->name('edit3');

    Route::get('edit4', function () {
        return view('modules.edit.edit4');
    })->name('edit4');

    Route::get('edit5', function () {
        return view('modules.edit.edit5');
    })->name('edit5');


    Route::patch('{id}/update', function () {

    });

    Route::get('delete', function () {
        return view('modules.delete');
    })->name('delete');

});
