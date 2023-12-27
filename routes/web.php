<?php
use App\Http\Controllers\Backend\CentrePointController;
use App\Http\Controllers\TransaksiController;

use App\Http\Controllers\DataController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Models\CentrePoint;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CentreController;
use App\Http\Controllers\SpaceController;
use App\Http\Controllers\TitikController;



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
Route::get('/maptes', [TitikController::class, 'index']);
Route::get('/titik/json', [TitikController::class, 'json']);

Route::get('/titik/lokasi/{id}', [TitikController::class, 'lokasi']);
Route::get('/adminpage', [HomeController::class, 'adminpage']);







Route::get('/maps', [HomeController::class, 'user_map'])->name('maps');
Route::get('/barcode', [HomeController::class, 'barcode'])->name('barcode');


// Route::get('/maps', function () {
//     return view('maps');
// });

Route::get('/admin', [HomeController::class, 'adminpage']);



Auth::routes();

Route::resource('centre-point', (CentrePoint::class));
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function () {
    Route::get('/transaction', [TransaksiController::class, 'index'])->name('index');
    Route::get('/adminpage/create', [HomeController::class, 'admin_map'])->name('maps');
    Route::get('/adminmap/{id}/edit', [HomeController::class, 'admin_edit'])->name('edit');
    Route::put('/adminmap/{id}', [HomeController::class, 'update'])->name('update');
});

Route::middleware(['auth'])->group(function(){
    Route::get('/admins', [App\Http\Controllers\HomeController::class, 'admins'])->name('admins');
    Route::get('/simple-map', [App\Http\Controllers\HomeController::class, 'simple_map'])->name('simple-map');
    Route::get('/markers', [App\Http\Controllers\HomeController::class, 'marker'])->name('markers');
    Route::get('/circle', [App\Http\Controllers\HomeController::class, 'circle'])->name('circle');
    Route::get('/polygon', [App\Http\Controllers\HomeController::class, 'polygon'])->name('polygon');
    Route::get('/polyline', [App\Http\Controllers\HomeController::class, 'polyline'])->name('polyline');
    Route::get('/rectangle', [App\Http\Controllers\HomeController::class, 'rectangle'])->name('rectangle');
    Route::get('/layer', [App\Http\Controllers\HomeController::class, 'layers'])->name('layer');
    Route::get('/layer-group', [App\Http\Controllers\HomeController::class, 'layer_group'])->name('layer-group');
    Route::get('/geojson', [App\Http\Controllers\HomeController::class, 'geojson'])->name('geojson');
    Route::get('/get-coordinate', [App\Http\Controllers\HomeController::class, 'getCoordinate'])->name('getCoordinate');
    
    ## Route Datatable
    Route::get('/centre-point/data',[\App\Http\Controllers\Backend\DataController::class,'centrepoint'])->name('centre-point.data');
    Route::get('/spot/data',[\App\Http\Controllers\Backend\DataController::class,'spot'])->name('spot.data');
    
    Route::resource('centre-point',(\App\Http\Controllers\Backend\CentrePointController::class));
    Route::resource('spot',(\App\Http\Controllers\Backend\SpotController::class));

    Route::delete('/adminmap/{id}', [CentrePointController::class, 'destroy']);

});


Route::post('/transaksi_process', [TransaksiController::class, 'process'])->name('process');
// Route::resource('space', (SpaceController::class));


// Route::get('/centrepoint/data', [DataController::class, 'centrepoint'])->name('centre-point.data');
// Route::get('/space/data', [DataController::class, 'space'])->name('data-space');

