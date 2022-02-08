<?php

use App\Http\Controllers\Site1Controller;
use Illuminate\Support\Facades\Route;
use App\Http\controllers\Sitecontroller;
use App\Http\controllers\StudentController;
use App\Http\controllers\TestController;

Route::prefix('site1')->group(function() {




    Route::get('/', [Site1Controller::class, 'index'])
    ->name('site1home');

    Route::get('/about', [Site1Controller::class, 'about'])
    ->name('about434');

    Route::get('/contact', [Site1Controller::class, 'contact'])
    ->name('contact996');

    Route::get('/services', [Site1Controller::class, 'services'])
    ->name('services669');
});
