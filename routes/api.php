<?php


use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\SpaceController;
use App\Http\Controllers\Api\SpbuController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
 
// test route

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
    
});

<<<<<<< HEAD
Route::post('callback','transaksi@callback') -> name('callback');
=======
Route::post('callback','transaksi@callback') -> name('callback');

Route::post('login', [AuthController::class, 'login']);

Route::post('loginadmin', [AuthController::class, 'loginadmin']);


Route::group(['middleware' => ['auth:sanctum']], function () {

Route::apiResource('spbu',SpbuController::class);

Route::apiResource('space', SpaceController::class);

}); 

>>>>>>> 950001015bc5af1ec870d8c195426de688afbb51
