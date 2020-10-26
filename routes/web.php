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
    return view('layouts.home');
});

Route::get("/employee_list", [\App\Http\Controllers\EmployeeController::class, "index"]);

Route::get("/employees/{id}/edit", [\App\Http\Controllers\EmployeeController::class, "edit"])->name("employees.edit");

Route::put("/employees/{id}/update", [\App\Http\Controllers\EmployeeController::class, "update"])->name("employees.update");




