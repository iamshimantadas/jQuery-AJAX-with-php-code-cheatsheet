<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SearchController;


Route::get('/', function () {
    return view('register');
});

Route::get('/search',[SearchController::class,'search']);
