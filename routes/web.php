<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::prefix('admin')->group(function (){
    Route::get('/index  ',[UserController::class,'index'])->name('user.index');
    Route::get('/create',[UserController::class,'create'])->name('user.create');
    Route::post('/store', [UserController::class, 'store'])->name('user.store');
    Route::post('/{id}/update',[UserController::class,'edit'])->name('user.update');
    Route::get('/{id}/edit',[UserController::class,'update'])->name('user.edit');
    Route::get('{id}/delete',[UserController::class,'delete'])->name('user.delete');
    Route::get('/search',[UserController::class,'search'])->name('user.search');
});
Route::get('/login',[AuthController::class,'showLogin'])->name('login.dashboard');
Route::post('/login',   [AuthController::class,'login'])->name('admin.login');
Route::get('/logout',[AuthController::class,'logout'])->name('admin.logout');
