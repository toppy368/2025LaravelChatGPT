<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShortUrl extends Model
{
    // 在 fillable 變數中, 'original_url' 可填寫原址網址, 而 'short_code' 可填寫短網址
    protected $fillable = ['original_url', 'short_code'];

    public static function generateCode(): string
    {
        // TEST
        return substr(str_shuffle('0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'), 0, 10);
    }
}}
