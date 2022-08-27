<?php

use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/',[ApiController::class,'index']);
Route::get('getdata',[ApiController::class,'getdata']);
Route::group(['middleware' => 'check-token'], function(){
    Route::post('getdataid',[ApiController::class,'getdataid']);
    //kalau nanti ada endpoint yang butuh authentication tinggal dimasukkan di grup ini saja
});
