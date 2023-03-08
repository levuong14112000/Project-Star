<?php

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/main',[\App\Http\Controllers\myController::class,'main'])->name('main');
Route::get('/test',[\App\Http\Controllers\myController::class,'lessionview']);
Route::get('/khoahoc/{id}',[\App\Http\Controllers\myController::class,'detail'])->name('kh');
Route::get('contact',[\App\Http\Controllers\myController::class,'contact'])->name('contact');
Route::post('postcontact',[\App\Http\Controllers\myController::class,'postcontact'])->name('postcontact');

Route::get('lessionsshow/{id}/{key}',[\App\Http\Controllers\myController::class,'lessionsshow'])->name('lsshow');
Route::get('/xuat-file-pdf', function () {
    $pdf = new Dompdf();
    $pdf->loadHtml(view('downloadpdf')->render());
    $pdf->render();
    return $pdf->stream('download.pdf');
})->name('downloadpdf');



