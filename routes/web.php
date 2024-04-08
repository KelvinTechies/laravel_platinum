<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\myMiddleWare;

Route::get('/sign-in', [AuthController::class, "signIn"])->name('login');
Route::get('/sign-up', [AuthController::class, "signUp"]);
Route::post('/sign-in', [AuthController::class, "loginUsers"]);
Route::post('/sign-up', [AuthController::class, "storeUsers"]);
Route::post('/sign-out', [AuthController::class, "logoutUsers"]);

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', [DashboardController::class, "Dashboard"]);
    Route::get('/transactions', [DashboardController::class, "TrasnsactionsPage"]);
    Route::get('/account', [DashboardController::class, "AccountPage"]);
    Route::get('/notifications', [DashboardController::class, "NotificationPage"]);
    Route::get('/profile', [DashboardController::class, "ProfilePage"]);
    Route::get('/about', [DashboardController::class, "AboutPage"]);
    Route::post('/del_noti', [DashboardController::class, "delNotification"]);
});
