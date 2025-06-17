<?php

use App\Http\Controllers\Lk\IndexController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::prefix('lk')
    ->group(function () {
        Auth::routes();

        Route::middleware('auth')
            ->name('lk.')
            ->group(function () {
                Route::get('/', IndexController::class)->name('index');

                Route::namespace('App\Http\Controllers\Lk\Profile')
                    ->prefix('profile')
                    ->name('profile.')
                    ->group(function () {
                        Route::get('/edit', 'EditController')->name('edit');
                        Route::put('/update', 'UpdateController')->name('update');
                    });

                Route::namespace('App\Http\Controllers\Lk\Request')
                    ->prefix('requests')
                    ->name('requests.')
                    ->group(function () {
                        Route::get('/', 'IndexController')->name('index');
                        Route::post('/', 'StoreController')->name('store');
                        Route::get('/{modelRequest}/edit', 'EditController')->name('edit');
                        Route::put('/{modelRequest}', 'UpdateController')->name('update');
                    });
            });
    });

Route::get('/', function () {
    return view('pages.index');
})->name('index');

Route::get('/services', function () {
    return view('pages.services');
})->name('services');

Route::get('/services/disposal', function () {
    return view('pages.services.disposal');
})->name('services.disposal');

Route::get('/services/shipping', function () {
    return view('pages.services.shipping');
})->name('services.shipping');

Route::get('/services/passportisation', function () {
    return view('pages.services.passportisation');
})->name('services.passportisation');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/reviews', function () {
    return view('pages.reviews');
})->name('reviews');

Route::get('/stocks', function () {
    return view('pages.stocks');
})->name('stocks');

Route::get('/contacts', function () {
    return view('pages.contacts');
})->name('contacts');
