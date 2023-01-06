<?php

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
Route::get('lista-empleados',[App\Http\Controllers\EmpleadosController::class, 'listaDeLosEmpleados']);
Route::get('salario-de-los-empleados/{min}/{max}',[App\Http\Controllers\EmpleadosController::class, 'salarioDeLosEmpleados']);
Route::get('email-empleados/{email}',[App\Http\Controllers\EmpleadosController::class, 'emailEmpleados']);
