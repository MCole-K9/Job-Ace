<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


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

Route::get('/', [HomeController::class, 'index'])->name("home");

Route::match(["GET", "POST"], '/login', [AuthController::class, 'login'])->name("login")->middleware("guest");

Route::match(["GET", "POST"], "/register", [AuthController::class, "register"])->name("register")->middleware("guest");

Route::get("/logout", [AuthController::class, "logout"])->name("logout")->middleware("auth");

