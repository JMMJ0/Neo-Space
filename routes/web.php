<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViajeController;

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
Route::view('/cohete','cohete');
Route::view('/destinos','destinos');
Route::view('/companies','companies');
Route::view('/viajesTierra','viajesTierra');
// Route::view('/profile','profile')->middleware(['auth'])->name('profile');
Route::get('/profile', [UserController::class, 'viajes_usuario'])->middleware(['auth'])->name('profile');
Route::get('/edit_profile', [UserController::class, 'viajes_usuario_editar'])->middleware(['auth'])->name('edit_profile');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
