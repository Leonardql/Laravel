<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $guarded = [];
    protected $casts = [
        'unit_type' => 'array',
    ];

    protected $fillable = ['event_id', 'user_id', 'comment'];
}
