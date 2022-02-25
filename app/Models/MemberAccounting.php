<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MemberAccounting extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'member_accountings';
    protected $fillable = [
        'member_main_id',
        'sum_depo',
        'count_depo',
        'sum_wd',
        'count_wd',
        'sum_referral',
        'count_referral',
        'sum_rebate',
        'count_rebate'
    ];

    protected $casts = [
        'member_main_id' => 'integer',
        'sum_depo'       => 'double',
        'sum_wd'         => 'double',
        'sum_referral'   => 'double',
        'sum_rebate'     => 'double',
        'count_depo'     => 'integer',
        'count_wd'       => 'integer',
        'count_referral' => 'integer',
        'count_rebate'   => 'integer'
    ];

    //relationship
    public function memberMain()
    {
        return $this->belongsTo(MemberMain::class, 'member_main_id', 'id');
    }
}
