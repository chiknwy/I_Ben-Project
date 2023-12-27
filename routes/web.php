<?php

use App\Http\Controllers\TransaksiController;
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

// Route::get('/', function () {
//    return view('donasi');
// });
 Route::get('/', [TransaksiController::class, 'index'])->name('index');

Route::post('/transaksi_process', [TransaksiController::class, 'process'])->name('process');

