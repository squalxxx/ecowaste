<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\RequestController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Site\SiteController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('page.show', ['path' => 'home']);
});

Route::prefix('admin')
    ->group(function () {
        Auth::routes();

        Route::middleware('auth')
            ->name('admin.')
            ->group(function () {
                Route::get('/', [AdminController::class, 'index'])->name('index');

                Route::resource('pages', PageController::class);

                Route::prefix('requests')
                    ->name('requests.')
                    ->group(function () {
                        Route::get('/', [RequestController::class, 'index'])->name('index');
                        Route::post('/', [RequestController::class, 'store'])->name('store');
                        Route::get('/{modelRequest}/edit', [RequestController::class, 'edit'])->name('edit');
                        Route::put('/{modelRequest}', [RequestController::class, 'update'])->name('update');
                    });

                Route::prefix('profile')
                    ->name('profile.')
                    ->group(function () {
                        Route::get('/edit', [ProfileController::class, 'edit'])->name('edit');
                        Route::put('/update', [ProfileController::class, 'update'])->name('update');
                    });

                Route::prefix('settings')
                    ->name('settings.')
                    ->group(function () {
                        Route::get('/edit', [SettingsController::class, 'edit'])->name('edit');
                        Route::put('/update', [SettingsController::class, 'update'])->name('update');
                    });
            });
    });

Route::get('{path}', [SiteController::class, 'page'])
    ->where('path', '.*')
    ->name('page.show');
