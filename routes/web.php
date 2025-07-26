<?php

use App\Http\Controllers\PremissionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GlobalController;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('admins.globals.index');
});

Route::get('home',[HomeController::class, 'home'])->name('home.index');

//Global admin
Route::get('admin', [GlobalController::class, 'dashboard'])->name('globals.index');
Route::get('create', [GlobalController::class, 'create'])->name('globals.create');
Route::get('list', [GlobalController::class, 'list'])->name('globals.list');



