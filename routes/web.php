<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\LibraryController;
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
    Route::get('/index',[UserController::class,'index'])->name('user.index');
    Route::get('/create',[UserController::class,'create'])->name('user.create');
    Route::post('/store', [UserController::class, 'store'])->name('user.store');
    Route::post('/{id}/update',[UserController::class,'edit'])->name('user.update');
    Route::get('/{id}/edit',[UserController::class,'update'])->name('user.edit');
    Route::get('{id}/delete',[UserController::class,'delete'])->name('user.delete');
    Route::get('/search',[UserController::class,'search'])->name('user.search');
});
Route::get('/register',[AuthController::class,'formRegister'])->name('register');
Route::post('/register',[AuthController::class,'register'])->name('admin.register');
Route::get('/login',[AuthController::class,'showLogin'])->name('login.dashboard');
Route::post('/login',   [AuthController::class,'login'])->name('admin.login');
Route::get('/logout',[AuthController::class,'logout'])->name('admin.logout');
Route::prefix('library')->group(function () {
    Route::get('/index', [LibraryController::class, 'index'])->name('library.index');
    Route::get('/create', [LibraryController::class, 'create'])->name('library.create');
    Route::post('/store', [LibraryController::class, 'store'])->name('library.store');
    Route::post('/{id}/update', [LibraryController::class, 'edit'])->name('library.update');
    Route::get('/{id}/edit', [LibraryController::class, 'update'])->name('library.edit');
    Route::get('/   {id}/delete', [LibraryController::class, 'delete'])->name('library.delete');
    Route::get('/{id}/search', [LibraryController::class, 'search'])->name('library.search');
});
