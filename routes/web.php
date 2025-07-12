<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);

//resource takes care of CRUD operations, but if I want ot have additional methods then I shuold use Route::get or smthng.
Route::resource('/jobs', JobController::class);