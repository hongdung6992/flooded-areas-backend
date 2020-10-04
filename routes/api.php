<?php

use App\Http\Controllers\Api\FloodplainController;
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
Route::group(['prefix' => 'client'], function () {

});

Route::group(['prefix' => 'admin'], function () {
});

Route::group(['prefix' => 'floodplains'], function () {
  Route::get('', [FloodplainController::class, 'index']);
  Route::post('', [FloodplainController::class, 'store']);
});
