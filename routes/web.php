<?php

use App\Http\Controllers\ConjugateController;
use App\Http\Controllers\GuestConjugateController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});
Route::group(['middleware' => ['auth']], function () {
    Route::get('/conjugate', [ConjugateController::class, 'index'])->name('conjugate');
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
    Route::get('/settings', [\App\Http\Controllers\SettingsController::class, 'index'])
         ->name('settings');
    Route::post('/settings', [\App\Http\Controllers\SettingsController::class, 'update'])->name('settings.post');

    Route::get('/conjugate/single', [ConjugateController::class, 'single'])->name('conjugate.single');
    Route::get('/conjugate/multiple', [ConjugateController::class, 'multiple'])->name('conjugate.multiple');
    Route::get('/conjugate/{list}', [ConjugateController::class, 'list'])->name('conjugate.list');
});
Route::get('/guest/conjugate/single', [GuestConjugateController::class, 'single'])->name('guest.conjugate.single');
Route::get('/guest/conjugate/multiple', [GuestConjugateController::class, 'multiple'])->name('guest.conjugate.multiple');


require __DIR__.'/auth.php';
