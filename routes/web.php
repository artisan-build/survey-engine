<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'guest'], function () {
    Route::view('/', 'welcome')->name('welcome');
    Route::view('/survey/{survey}', 'survey');
});
