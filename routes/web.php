<?php

use App\Http\Controllers\adminContoller;
use App\Http\Controllers\auth;
use App\Http\Controllers\indexController;
use App\Http\Controllers\reservationController;
use App\Http\Middleware\isAdmin;
use App\Http\Middleware\isadmindelete;
use App\Http\Middleware\islogged;
use Illuminate\Support\Facades\Route;

//auth
Route::get('/register', [auth::class, 'register'])->name("register");
Route::get("/register/user", [auth::class, 'registerUser'])->name("registerUser");
Route::get('/login', [auth::class, 'login'])->name("login");
Route::post('/login', [auth::class, 'loginUser'])->name('loginUser');
Route::post('/logout', [auth::class, 'logout'])->name('logout');

//users pages
Route::get('/', [indexController::class, "index"])->name("dashboardUser");
Route::get("/user/profile", [indexController::class, "userprofile"])->name("userprofile");
Route::get("/aboutUs", [indexController::class, "aboutus"])->name("aboutUsUser");
//user services
Route::get("/services", [indexController::class, "services"])->name("servicesUser");
Route::get("/services/safaris", [indexController::class, "servicessafaris"])->name("servicesUsersafaris");
Route::get("/services/trekking", [indexController::class, "servicestrekking"])->name("servicesUsertrekking");
Route::get("/services/beach", [indexController::class, "servicesbeach"])->name("servicesUserbeach");
//////////////////////////////////////////////reservation/////////////////////////////////////////
Route::get("/reservation", [reservationController::class, "index"])->name("reservationUser")->middleware(islogged::class);
Route::post("/reservation/store", [reservationController::class, "reservationStore"])->name("storereservationUser")->middleware(islogged::class);
Route::get('/reservation/{id}', [reservationController::class,  "reservationShow"])->name("ShowreservationUser")->middleware(islogged::class);
Route::get("/reservation/{id}/edit", [reservationController::class, "editreservation"])->name("editreservationUser")->middleware(islogged::class);
Route::put("/reservation/{id}/update", [reservationController::class, "updatereservation"])->name("updatereservationUser")->middleware(islogged::class);
Route::delete("/reservation/{id}/delete", [reservationController::class, "destroyreservation"])->name("deletereservationUser")->middleware(isadmindelete::class);;
//////////////////////////////////////////
Route::get("/contactUs", [indexController::class, "contactUs"])->name("contactUsUser");
//reviews
Route::get("/reviews", [indexController::class, "reviews"])->name("reviewsUser");
Route::post("/reviews/add", [indexController::class, "addreviews"])->name("addreviewsUser");
Route::put('/reviews/modify', [indexController::class]);

//admin pages
Route::get('/admin/dashboard', [adminContoller::class, "adminindex"])->name("dashboardAdmin")->middleware(isAdmin::class);
Route::get('/admin/users', [adminContoller::class, "adminuser"])->name("usersAdmin")->middleware(isAdmin::class);
Route::get('/admin/trips', [adminContoller::class, "tripsAdmin"])->name("tripsAdmin")->middleware(isAdmin::class);
Route::get('/admin/account/add', [adminContoller::class, "accountAdminUsers"])->name("accountAdminUsers")->middleware(isAdmin::class);
Route::post('/admin/account/add', [adminContoller::class, "addaccountAdmin"])->name("addaccountAdminUsers")->middleware(isAdmin::class);
Route::get('/admin/account', [adminContoller::class, "accountAdmin"])->name("accountAdmin")->middleware(isAdmin::class);
Route::put('/admin/account', [adminContoller::class, "modifyaccountAdmin"])->name("modifyaccountAdmin")->middleware(isAdmin::class);
