<?php

namespace App\Http\Controllers;

use App\Models\Balance;
use Illuminate\Http\Request;

class BalanceController extends Controller
{

    /**
     * Получаем балансы
     *
     * @return \Illuminate\Http\Response
     */
    public static function get_balance( array $params )
    {

        if( !empty( $params['user_id'] ) ){

            $result = Balance::where('user_id', '=', (int) $params['user_id'] )
            ->select(['balance'])
            ->orderBy('created_at', 'desc')
            ->first();

            return $result->balance;

        }

        return Balance::orderBy('created_at', 'desc')->take( ( $params['limit'] ?? 50 ) )->get();
    }
    
}
