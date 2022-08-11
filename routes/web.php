<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignatureController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

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

Route::get('/', function() {
    return view('user.error');
});
Route::get('guest-online-check-in', [UserController::class, 'index']);
Route::post('simpanCheckin', [UserController::class, 'upload']);
Route::get('admin', [AdminController::class, 'login']);

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/logout', [App\Http\Controllers\HomeController::class, 'logout'])->name('logout');

    Route::middleware(['admin'])->group(function () {
        Route::get('beranda', [AdminController::class, 'index']);
        Route::get('download/{id}', [AdminController::class, 'download']);
        Route::get('peraturan', [AdminController::class, 'peraturan']);
        Route::put('/', [AdminController::class, 'simpan'])->name('simpanPeraturan');
        Route::get('user', [AdminController::class, 'user']);
        Route::get('tambahuser', [AdminController::class, 'tambahuser']);
        Route::post('/', [AdminController::class, 'simpanuser'])->name('simpanUser');
        Route::get('/edituser{id}', [AdminController::class, 'edituser']);
        Route::put('/update{id}', [AdminController::class, 'updateuser']);
        Route::get('/delete/{id}', [AdminController::class, 'deleteuser']);
    });
});
