<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\VineController;
use App\Http\Controllers\Admin\WineController;
use App\Http\Controllers\Admin\WineryController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use App\Models\Wine;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PageController::class, 'home']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'verified'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [DashboardController::class, 'home'])->name('home');

    Route::resource('wines', WineController::class);
    Route::resource('wineries', WineryController::class);
    Route::resource('vines', VineController::class);
});

require __DIR__ . '/auth.php';
