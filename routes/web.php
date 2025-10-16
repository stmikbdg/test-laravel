<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/content', function(){
    return view('content');
});
Route::get('/test', function(){
    return view('test');
});