<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    dd(request()->headers->all(), request()->server->all());
    return view('welcome');
});
