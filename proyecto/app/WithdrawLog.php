<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WithdrawLog extends Model
{
    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id')->withDefault();
    }
}
