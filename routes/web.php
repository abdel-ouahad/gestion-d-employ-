<?php

use App\Http\Controllers\DepartementController;
use App\Http\Controllers\EmployeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/welcome', [HomeController::class, 'welcome'])->name('welcome');

Route::resource('employe' , EmployeController::class);
Route::get('employe.vacationrequest/{id}' , [EmployeController::class, 'vacationrequest'])->name('vacationrequest');
Route::get('employe.workcertification/{id}' , [EmployeController::class, 'workcertification'])->name('workcertification');

Route::resource('departement' , DepartementController::class);

