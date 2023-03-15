<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\myController;
use Dompdf\Dompdf;


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

Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/', [AdminController::class,'dashboard']);
});
Route::get('/login', [AdminController::class,'login'])->name('login');
Route::get('/',[\App\Http\Controllers\myController::class,'main'])->name('main');
Route::get('/test',[\App\Http\Controllers\myController::class,'lessionview']);
Route::get('/khoahoc/{id}',[\App\Http\Controllers\myController::class,'detail'])->name('kh');
Route::get('contact',[\App\Http\Controllers\myController::class,'contact'])->name('contact');
Route::post('postcontact',[\App\Http\Controllers\myController::class,'postcontact'])->name('postcontact');

Route::get('lessionsshow/{id}/{key}',[\App\Http\Controllers\myController::class,'lessionsshow'])->name('lsshow');
Route::get('/tai-file-pdf',[\App\Http\Controllers\myController::class,'printpdf'])->name('printpdf');
// Route::get('/xuat-file-pdf',[\App\Http\Controllers\myController::class,'xuatpdf'])->name('xuatfilepdf');



