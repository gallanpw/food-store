<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{
    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'transaction_id',
        'product_id',
        'qty',
        'price',
    ];
}
