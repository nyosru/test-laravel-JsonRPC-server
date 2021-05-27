<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\RpcResponseController;
use App\Http\Controllers\BalanceController;

class RpcServerController extends Controller
{

    /**
     * шлём запрос в BalanceController и отправляем ответ на формирование json ответа нужной формы
     */
    public static function handle(Request $request, BalanceController $controller)
    {

        try {

            if (
                empty($request['method']) ||
                empty($request['params']) ||
                empty($request['id'])
            ) {
                throw new \Exception('Нехватает переменных');
            }

            $result = $controller->{$request['method']}(...[$request['params']]);

            return RpcResponseController::success($result, $request['id']);
        } catch (\Exception $e) {
            return RpcResponseController::error($e->getMessage());
        }
    }
}
