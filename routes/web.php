<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\indexcontroller;
use App\Http\Controllers\Admincontroller;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\pricecontroller;


Route::middleware(['LOG_auth'])->group(function () {
    Route::get('/', [indexcontroller::class, 'index'])->name('index')->middleware('shortcode');
    Route::get('/order', [indexcontroller::class, 'order'])->name('order');
    Route::get('/login', [AuthController::class, 'login'])->name('admin.login');
    Route::post('/login/auth', [AuthController::class, 'validate'])->name('login.auth');
    Route::post('/order/save', [indexcontroller::class,'store'])->name('order.save');
});
Route::resource('/admin_orders',Ticketcontroller::class);
Route::middleware(['Admin_auth'])->group(function () {
Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/admin',[Admincontroller::class, 'Dashboard'])->name('admin.dashboard');
Route::get('/register',[AuthController::class,'register'])->name('register');
Route::post('/register', [AuthController::class, 'registerPost'])->name('register');
Route::get('/price',[pricecontroller::class, 'index'])->name('price')->middleware('shortcode');
Route::post('/price/update/{$id[]}', [pricecontroller::class, 'update'])->name('price.update');
});
