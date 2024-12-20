<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("send", function () {
    event(new \App\Events\SendMsg("hi..."));

    return "send";
});
