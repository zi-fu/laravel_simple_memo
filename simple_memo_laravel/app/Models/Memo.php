<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Memo extends Model
{
    use HasFactory;

    /**
     * $fillableは更新できるカラム
     */
    protected $fillable = [
        'user_id',
        'title',
        'content',
    ];
}
