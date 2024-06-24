<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/User/create', [UserController::class, 'create']);
// Route::post('/User', [UserController::class, 'store'])->name('User.store');
// // Route::get('/User', [UserController::class, 'index'])->name('User.index');
// Route::get('User/{User}', [UserController::class, 'show'])->name('User.show');
// Route::get('User/{User}/edit', [UserController::class, 'edit'])->name('User.edit');
// Route::put('User/{User}', [UserController::class, 'update'])->name('User.update');
// Route::delete('User/{User}', [UserController::class, 'destroy'])->name('User.destroy');

//Login

// Route::get('/login', [LoginController::class, 'create'])->name('login');
// Route::post('/login', [LoginController::class, 'store'])->name('login.store');
// Route::post('/logout', [LoginController::class, 'logout'])->name('login.logout');

Route::get('/User/create', [UserController::class, 'create']);
Route::post('/User', [UserController::class, 'store'])->name('User.store');


Route::middleware(['auth'])->group( function() { 
    Route::get('User/{User}', [UserController::class, 'show'])->name('User.show');
    Route::get('User/{User}/edit', [UserController::class, 'edit'])->name('User.edit');
    Route::put('User/{User}', [UserController::class, 'update'])->name('User.update');
    Route::delete('User/{User}', [UserController::class, 'destroy'])->name('User.destroy');
    Route::get('/User', [UserController::class, 'index'])->name('User.index');
});

require __DIR__ . '/auth.php';