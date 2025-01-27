<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('/homepage/homepage', ["test" => "Hello World!", "number" => -1]);
});

