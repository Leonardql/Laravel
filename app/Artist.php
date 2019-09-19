<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    protected $guarded = [];
    protected $casts = [
        'unit_type' => 'array',
    ];
}
