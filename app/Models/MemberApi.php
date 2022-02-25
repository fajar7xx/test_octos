<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MemberApi extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'member_apis';
    protected $fillable = [
        'member_main_id',
        'provider_id',
        'user_api',
        'balance',
        'is_active',
        'token',
        'turnover_bonus',
    ];

    protected $casts = [
        'member_main_id' => 'integer',
        'provider_id'    => 'integer',
        'balance'        => 'double',
        'turnover_bonus' => 'double'
    ];

    //relationship
    public function memberMain()
    {
        return $this->belongsTo(MemberMain::class, 'member_main_id', 'id');
    }
}
