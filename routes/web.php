<?php

use App\Http\Controllers\GuestController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Home', [
        'zasadaciPoriadokPath' => asset('storage/zasadaci_poriadok.png'),
    ]);
})->name('home');

Route::name('guest.')->prefix('potvrdenie-ucasti')->controller(GuestController::class)->group(function () {
   Route::get('/', 'create')->name('create');
   Route::post('/', 'store')->name('store');
   Route::delete('/{guest}', 'destroy')->name('destroy');
});

Route::get('/admin', [GuestController::class, 'index'])->middleware(['auth', 'verified'])->name('admin');

require __DIR__.'/auth.php';
