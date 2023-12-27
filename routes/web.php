<?php

use App\Http\Controllers\DataController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Models\CentrePoint;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CentreController;
use App\Http\Controllers\SpaceController;


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
    return view('home');
});



Route::get('/maps', [HomeController::class, 'simple_map'])->name('maps');

// Route::get('/maps', function () {
//     return view('maps');
// });

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::resource('centre-point', (CentrePoint::class));
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Route::resource('space', (SpaceController::class));

// Route::get('/centrepoint/data', [DataController::class, 'centrepoint'])->name('centre-point.data');
// Route::get('/space/data', [DataController::class, 'space'])->name('data-space');

