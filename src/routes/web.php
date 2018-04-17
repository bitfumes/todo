<?php

Route::group(['namespace' => 'Bitfumes\Todo\Http\Controllers'], function () {
    Route::resource('todo', 'TodoController');
});