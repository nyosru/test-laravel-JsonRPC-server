<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;
use App\Http\Controllers\BalanceController;
use App\Http\Controllers\RpcServerController;


/**
 * принимаем запрос, на возврат данных
 */
Route::post('/datain', 'App\Http\Controllers\RpcServerController@handle');
