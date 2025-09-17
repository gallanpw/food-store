<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shipping extends Model
{
    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = ['shipping_courier', 'shipping_service', 'shipping_cost', 'transaction_id'];
}
