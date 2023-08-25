<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClincController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Dashboard', [AdminController::class,'index'] )->name('Admin.index');
Route::get('/index', [ClincController::class,'index'] )->name('EndUser.index');
Route::get('/contact', [ClincController::class,'contact'] )->name('EndUser.contact');   
Route::get('/majors', [ClincController::class,'majors'] )->name('EndUser.majors');   
Route::get('/login', [ClincController::class,'login'] )->name('EndUser.login');   
Route::get('/register', [ClincController::class,'register'] )->name('EndUser.register');   
Route::get('/doctors/doctor', [ClincController::class,'doctor'] )->name('EndUser.doctors.doctor');   
Route::get('/doctors/index', [ClincController::class,'doctorIndex'] )->name('EndUser.doctors.index');   
