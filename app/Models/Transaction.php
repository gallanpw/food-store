<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'customer_id',
        'shipping_id',
        'province_id',
        'city_id',
        'district_id',
        'invoice',
        'weight',
        'address',
        'total',
        'status',
        'snap_token',
    ];
}
