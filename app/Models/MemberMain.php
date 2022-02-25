<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MemberMain extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'member_mains';
    protected $fillable = [
        'username',
        'password',
        'balance',
        'status',
        'level_id',
        'depo_l',
        'user_u',
        'upline_user'
    ];

    protected $casts = [
        'balance' => 'double',
        'level_id' => 'integer',
        'depo_l ' => 'double',
    ];
}
