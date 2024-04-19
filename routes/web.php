<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\indexcontroller;
use App\Http\Controllers\Admincontroller;
use App\Http\Controllers\TicketController;


Route::middleware(['LOG_auth'])->group(function () {
    Route::get('/', [indexcontroller::class, 'index'])->name('index');
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
Route::get('/add', [AuthController::class,'add'])->name('add_admin');
Route::delete('/register/{id}/delete', [AuthController::class,'destroy'])->name('admin.destroy');
Route::post('/register/{id}/update', [AuthController::class,'update'])->name('admin.update');
Route::get('/register/{id}/edit', [AuthController::class,'edit'])->name('admin.edit');
Route::post('/register', [AuthController::class, 'registerPost'])->name('register');
});
