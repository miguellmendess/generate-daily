<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    protected $fillable = [
        'number', 'user',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
