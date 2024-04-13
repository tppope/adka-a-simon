<?php

use App\Http\Controllers\GuestController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Home', [
        'canLogin' => Route::has('login'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
})->name('home');

Route::name('guest.')->prefix('potvrdenie-ucasti')->controller(GuestController::class)->group(function () {

   Route::get('/', 'create');
   Route::post('/', 'store')->name('store');
});

Route::get('/admin', function () {
    return Inertia::render('Admin/Dashboard');
})->middleware(['auth', 'verified'])->name('admin');

require __DIR__.'/auth.php';
