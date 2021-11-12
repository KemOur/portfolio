<?php

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

Route::get('/', function () { return view('welcome');});

//Route::get('/welcome/frontend', [\App\Http\Controllers\Frontend::class, 'index']);

Route::get('/frontend', function () { return view('front');});
Route::get('/backend', function () { return view('back');});
Route::get('/mobile', function () { return view('mobile');});


/*------------- ADMIN --------------*/

//Route::get('/dashboard/admin', [\App\Http\Controllers\AdminController::class, 'index'])->middleware('auth')->name('admin.dashboard');
Route::get('/admin/dashboard', [\App\Http\Controllers\AdminController::class, 'index']);
