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
        return Balance::orderBy('created_at', 'asc')->get();
    }
    
}
