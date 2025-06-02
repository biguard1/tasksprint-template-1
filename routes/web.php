<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    dd(request()->headers->all());
    return view('welcome');
});
