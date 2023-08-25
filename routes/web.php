<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\base;
use App\Http\Controllers\Admin_controll;

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

Route::get('/', [base::class,'home'])->name('home');
Route::get('/user1', [base::class,'user1'])->name('user1');
Route::post('/user1', [base::class,'user1_request'])->name('user1_request');
Route::get('/user1_cart', [Admin_controll::class,'user1_cart'])->name('user1_cart')->middleware('admin_auth');
Route::get('/admin', [Admin_controll::class,'admin'])->name('admin');
Route::post('/admin', [Admin_controll::class,'authenticate_admin'])->name('authenticate_admin');
Route::post('/admin/logout', [Admin_controll::class,'admin_logout'])->name('admin_logout');
