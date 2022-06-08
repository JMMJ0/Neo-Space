<?php

use App\Actions\Fortify\UpdateUserProfileInformation;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserCOntroller2;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViajeController;
use App\Models\User;

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
Route::view('/destinos','destinos')->name('destinos');




Route::view('/companies','companies');


// Route::view('/profile','profile')->middleware(['auth'])->name('profile');
Route::any('/Users/profile', [UserController::class, 'viajes_usuario'])->middleware(['auth'])->name('Users.profile');
Route::any('/Users/edit_profile', [UserController::class, 'viajes_usuario_editar'])->middleware(['auth'])->name('Users.edit_profile');
// Route::post('/profile', [UpdateUserProfileInformation::class, 'update'])->middleware(['auth'])->name('save_profile');
Route::put('/Users/actualizar-usuario', [UserController::class, 'update'])->name('Users.actualizar-usuario');

Route::get('/Users/MisViajes', [UserController::class, 'viajes_usuario_listado'])->name('Users.MisViajes');


Route::get('/Viajes/viajesTierra', [ViajeController::class, 'viaje_Earth'])->name('Viajes.viajesTierra');
Route::put('/Viajes/viajesTierra', [UserController::class, 'reservar_viaje'])->name('reservarViaje');

Route::get('/Viajes/viajesISS', [ViajeController::class, 'viaje_ISS'])->name('Viajes.viajesISS');
Route::get('/Viajes/viajesMoon', [ViajeController::class, 'viaje_Moon'])->name('Viajes.viajesMoon');
Route::get('/Viajes/viajesMars', [ViajeController::class, 'viaje_Mars'])->name('Viajes.viajesMars');



Route::group(['middleware' => ['role:admin']], function () {
    //rutas accesibles solo para administradores
    Route::view('/Admin/admin', 'Admin.admin')->name('Admin.admin');
    //rutas para control usuarios

    Route::get('/Admin/ListarUsuarios', [UserController::class, 'listar_usuarios'])->name('Admin.ListarUsuarios');
    Route::view('/Admin/CrearUsuario', 'Admin.CrearUsuario')->name('Admin.CrearUsuario');
    Route::put('/Admin/CrearUsuario', [UserController::class, 'admin_create_user'])->name('Admin.NuevoUsuario');
    Route::get('/Admin/EditarUsuarios/{id}',  [UserController::class, 'editar_usuario'])->name('Admin.EditarUsuarios');
    Route::put('/Admin/ListarUsuarios/{id}', [UserController::class, 'admin_update_user'])->name('Admin.ActualizarUsuario');
    Route::delete('/Admin/ListarUsuarios/{id}', [UserController::class, 'admin_delete_user'])->name('Admin.borrarUsuario');

    //rutas para control viajes

    Route::get('/Admin/ListarViajes', [ViajeController::class, 'listar_viajes'])->name('Admin.ListarViajes');
    Route::view('/Admin/CrearViaje', 'Admin.CrearViaje')->name('Admin.CrearViaje');
    Route::put('/Admin/ListarViajes', [ViajeController::class, 'crear_viaje'])->name('Admin.NuevoViaje');
    Route::delete('/Admin/ListarViajes/{id}', [ViajeController::class, 'borrar_viaje'])->name('Admin.borrarViaje');



});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


