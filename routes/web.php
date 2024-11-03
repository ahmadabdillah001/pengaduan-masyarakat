<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\UserRoleController;
use App\Http\Controllers\Front\FrontComplaintController;
use App\Http\Controllers\Front\FrontController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [FrontController::class, 'index'])->name('front.index');
Route::get('/form-pengaduan', [FrontController::class, 'formPengaduan'])->name('front.form.pengaduan');
Route::get('/statistik-pengaduan', [FrontController::class, 'statistikPengaduan'])->name('front.statistik.pengaduan');

Route::controller(FrontComplaintController::class)->group(function () {
    Route::post('/form-pengaduan/store', 'storePengaduan')->name('front.store.pengaduan');
});

Route::group(['middleware' => 'guest'], function () {
    Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('login', [LoginController::class, 'login']);
    Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('register', [RegisterController::class, 'register']);
});

Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::prefix('admin')->middleware(['auth','isAdmin'])->name('admin.')->group(function(){
    Route::get('/', DashboardController::class)->name('index');
    Route::get('/semua-pengaduan', [AdminController::class, 'semuaPengaduan'])->name('semua.pengaduan');
    Route::get('/pengaduan/{id_pengaduan}/tanggapi', [AdminController::class, 'tanggapiPengaduan'])->name('tanggapi.pengaduan');
    Route::post('/pengaduan/store', [AdminController::class, 'storePengaduan'])->name('store.pengaduan');
    Route::get('/pengaduan/semua', [AdminController::class, 'semuaUserPengaduan'])->name('semua.user.pengaduan');
});

Route::prefix('user')->middleware(['auth','isUser'])->name('user.')->group(function(){
    Route::get('/', DashboardController::class)->name('index');
    Route::get('/riwayat-pengaduan', [UserRoleController::class, 'riwayatPengaduan'])->name('riwayat.pengaduan');
});

// Route::group(['middleware' => 'guest'], function () {
//     Auth::routes(['login' => false]); 
//     Auth::routes(['register' => false]); 
// });
// Auth::routes()

