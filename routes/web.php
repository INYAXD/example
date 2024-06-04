<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Usercontroller;

use App\Models\User;

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

Route::get('/index', [Usercontroller::class,"index"])->name("index");


Route::get('/register', [Usercontroller::class,"register"])->name("register.form");

Route::post('/register', [Usercontroller::class,"registeraction"])->name("register.action");

Route::get('/login', [Usercontroller::class,"login"])->name("login.form");

Route::post('/login', [Usercontroller::class,"loginaction"])->name("login.action");