<?php

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
/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
*/


Route::middleware(['cors'])->group(function () {
    Route::get('/get-pending-data', 'App\Http\Controllers\xAPIDataController@pendingData');
    Route::get('/get-all-data', 'App\Http\Controllers\xAPIDataController@getAllData');
    Route::post('/save-status', 'App\Http\Controllers\xAPIDataController@saveStatus');
});


