<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;


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


/*------------------RUTA-TABLA-DE-ADMIN---------------------------*/

Route::resource('user',App\Http\Controllers\UserController::class);

/*--------------------------------------------------------------*/


/*------------------RUTA-TABLA-DE-PRODUCTO---------------------------*/
Route::get('/', function () {
    return view('auth.login');
});

Route::resource('producto',ProductoController::class);
Auth::routes();
/*--------------------------------------------------------------*/

/*------------------------RUTA---ADMIN-y-USUARIO-------------------------------------------*/
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/usuario', [App\Http\Controllers\HomeController::class, 'getUser'])->name('usuario');
/*-----------------------------------------------------------------------------------------*/

/* Route::get('/producto', function () {
    return view('producto.index');
});

Route::get('/producto/create',[ProductoController::class,'create']);
*/