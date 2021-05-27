<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;

// use Services\RpcServer;

// use RpcServer;

use App\Http\Controllers\BalanceController;
//use App\Http\Controllers\Controller;

use App\Http\Controllers\RpcServerController;


/**
 * простой запрос, на возврат данных
 */
Route::post('/datain_simple', 'App\Http\Controllers\BalanceController@index_simple');

Route::post('/datain', 'App\Http\Controllers\RpcServerController@handle');

// Route::post('/datain', function (Request $request, RpcServer $server, BalanceController $controller) {
// Route::post('/datain', function (Request $request, RpcServerController $server, Controller $controller) {
// Route::post('/datain', function (Request $request ) {
// //     //return [];
// return response()->json( RpcServerController::handle( $request ) );
// });