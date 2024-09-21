<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\TiktokManagementController;
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
    return view('pages.home');
});

Route::get('/xsystems', function () {
    return view('pages.home-seo');
});

Route::get('/tang-follow-titok', function () {
    return view('pages.social');
});

Route::get('register', [AuthController::class, 'showRegistrationForm'])->name('show.register');
Route::post('register', [AuthController::class, 'register'])->name('register');
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('show.login');
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::group(['middleware' => ['auth']], function () {
    Route::group([
        'prefix' => 'admin'
    ], function () {
        Route::get('/dashboard', [AuthController::class, 'showDashboard'])->name('admin.dashboard');
        Route::get('/logout', [AuthController::class, 'logout'])->name('admin.logout');
        Route::group([
            'prefix' => 'tiktok'
        ], function () {
            Route::get('/index', [TiktokManagementController::class, 'showAllTiktoks'])->name('admin.tiktok.index');
            Route::get('/show', [TiktokManagementController::class, 'showTitokForm'])->name('admin.tiktok');
            Route::post('/store', [TiktokManagementController::class,'storeTiktok'])->name('admin.store.tiktok');
        });
    })->name('admin');
});