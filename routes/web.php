<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Payment\TripayController;

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


Route::get('/transactionPage', [TripayController::class, 'getTransactionPage'])->name('transactionPage');
