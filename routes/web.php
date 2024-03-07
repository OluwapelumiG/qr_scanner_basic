<?php

use App\Http\Controllers\Qr;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');
Route::view('new', 'new')
    ->middleware(['auth', 'verified'])
    ->name('new');

Route::middleware(['auth'])->group(function () {
    // Route for generating QR code
    Route::get('/qr-print/{id}', [QR::class, 'index'])->name('qr-print');
});

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
