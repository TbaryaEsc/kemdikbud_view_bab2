<?php

use App\Http\Controllers\KerjasamaController;
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

Route::get('/bab2', [KerjasamaController::class, 'index']);

Route::get('/', function () {
    return view('dasboard.index');
})->name('dasboard');

Route::get('/bab1', function () {
    return view('bab1.index');
})->name('bab1');

Route::get('/bab3', function () {
    return view('bab3.index');
})->name('bab3');

Route::get('/bab4', function () {
    return view('bab4.index');
})->name('bab4');

Route::get('/pelaporan', function () {
    return view('pelaporan.index');
})->name('pelaporan');

Route::get('/pengaturan', function () {
    return view('pengaturan.index');
})->name('pengaturan');

Route::get('/pjawab', function () {
    return view('pjawab.index');
})->name('pjawab');

Route::resource('kerjasama', KerjasamaController::class);
