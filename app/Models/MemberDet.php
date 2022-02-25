<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MemberDet extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'member_dets';
    protected $fillable = [
        'member_main_id',
        'fullname',
        'email',
        'phone',
        'bank_acc',
        'bank_num',
        'bank_name',
        'detail',
        'ip_i',
        'ip_l',
        'login_l',
        'system_msg'
    ];

    protected $casts = [
        'member_main_id' => 'integer',
        'login_l'        => 'datetime'
    ];

    //relationship
    public function memberMain()
    {
        return $this->belongsTo(MemberMain::class, 'member_main_id', 'id');
    }
}
