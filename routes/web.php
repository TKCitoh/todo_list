<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoListController; //追記必要

Route::get('/', function () {
    return view('welcome');
});

Route::get('/list', [TodoListController::class, 'index']);
