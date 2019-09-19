<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class invintation extends Model
{
    protected $guarded = [];
    protected $casts = [
        'unit_type' => 'array',
    ];

    protected $fillable = ['user_id','guestName', 'guestNumber', 'guestEmail', 'guestMessage'];
}
