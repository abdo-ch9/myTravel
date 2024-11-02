<?php

use App\Http\Controllers\adminContoller;
use App\Http\Controllers\auth;
use App\Http\Controllers\indexController;
use App\Http\Middleware\isAdmin;
use Illuminate\Support\Facades\Route;

//auth
Route::get('/register', [auth::class, 'register'])->name("register");
Route::get("/register/user", [auth::class, 'registerUser'])->name("registerUser");
Route::get('/login', [auth::class, 'login'])->name("login");
Route::post('/login', [auth::class, 'loginUser'])->name('loginUser');
Route::post('/logout', [auth::class, 'logout'])->name('logout');

//users pages
Route::get('/', [indexController::class, "index"])->name("dashboardUser");

//admin pages
Route::get('/admin/dashboard', [adminContoller::class, "adminindex"])->name("dashboardAdmin")->middleware(isAdmin::class);
Route::get('/admin/users', [adminContoller::class, "adminuser"])->name("usersAdmin")->middleware(isAdmin::class);
Route::get('/admin/trips', [adminContoller::class, "tripsAdmin"])->name("tripsAdmin")->middleware(isAdmin::class);
Route::get('/admin/account', [adminContoller::class, "accountAdmin"])->name("accountAdmin")->middleware(isAdmin::class);
