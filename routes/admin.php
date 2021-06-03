<?php

use App\Http\Controllers\Admin\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('', [HomeController::class, 'index'])->name('admin.home');



Route::get('1', function () {
    return view('admin.test1');
});

Route::get('2', function () {
    return view('admin.test2');
});
