<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DailyRecord extends Model
{
    protected $fillable = [
        'checkIn', 'breakIn','breakOut', 'checkOut', 'user',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
