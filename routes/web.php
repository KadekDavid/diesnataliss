<?php

use App\Http\Controllers\SubmisiController;
use Illuminate\Support\Facades\Route;

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
    return view('index');
});


Route::get('/pengantar', function () {
    return view('pengantar');
});

Route::get('/syarat', function () {
    return view('syarat');
});

Route::get('/submisi', function () {
    return view('submisi');
});

Route::post('/submisi', [SubmisiController::class, 'upload'])->name('pdf.upload');

