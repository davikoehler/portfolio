<?php


use Illuminate\Support\Facades\Route;

Route::get('/login')->name('login');

Route::group(['prefix' => '/admin', 'as' => 'admin.', 'middleware' => 'auth'], function () {
    Route::post('/logout')->name('logout');
});
