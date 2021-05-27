<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Balance extends Model
{
    use HasFactory;

    // разрешаем добавлять в эти поля
    protected $fillable = ['user_id','value','balance'];
    // запрещаем добавлять в эти поля
    protected $guarded = [];

    // protected $timestamps = true;
    public $timestamps = ["created_at", "updated_at"];


}
