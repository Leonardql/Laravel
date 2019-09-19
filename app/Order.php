<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guarded = [];
    protected $casts = [
        'unit_type' => 'array',
    ];

    protected $fillable = ['user_id','ticket_id_1','ticket_id_2','ticket_id_3','ticket_id_1_quantity','ticket_id_2_quantity','ticket_id_3_quantity','totalOrder', 'firstName', 'lastName', 'company', 'address', 'address', 'apartment', 'city', 'country', 'postal', 'phoneNumber'];
}
