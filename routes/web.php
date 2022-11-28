<?php

use App\Http\Controllers\AlumniController;
use Illuminate\Support\Facades\Route;

Route::controller(AlumniController::class)->group(function () {
    Route::get('/', 'index')->name('login');
    Route::get('/dashboard', 'dashboard')->name('dashboard');
    Route::get('/alumni', 'alumni')->name('alumni');
    Route::get('/addAlumni', 'addAlumni')->name('add');
    Route::post('/', 'login_action')->name('login_action');
    Route::post('/logout', 'logout_action')->name('logout_action');
    Route::post('/store', 'store')->name('store');
});