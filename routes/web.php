<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\LoggedController;
use App\Http\Controllers\ProjectsController;

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

Route::get('/', [ProjectsController :: class, 'index'])->name('projects.welcome');

Route::get('/dashboard', [ProjectsController :: class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/show/create', [ProjectsController :: class, 'create']) -> name('projects.create');
    Route::get('/show/{id}/edit', [ProjectsController :: class, 'edit']) ->name('projects.edit');
    Route::put('/show/{id}', [ProjectsController :: class, 'update']) ->name('projects.update');
    Route::post('/show', [ProjectsController :: class, 'store']) -> name('projects.store');
    Route::delete('/show/{id}', [ProjectsController :: class,  'destroy']) ->name('projects.destroy');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/guest/index', [GuestController :: class, 'index'])
    -> name('guest.index');

Route::get('/logged/show/{id}', [LoggedController :: class, 'show'])
    -> middleware('auth')
    -> name('logged.show');

require __DIR__.'/auth.php';
