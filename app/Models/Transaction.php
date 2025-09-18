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

    /**
     * TransactionDetails
     *
     * @return void
     */
    public function TransactionDetails()
    {
        return $this->hasMany(TransactionDetail::class);
    }

    /**
     * shipping
     *
     * @return void
     */
    public function shipping()
    {
        return $this->hasOne(Shipping::class);
    }

    /**
     * customer
     *
     * @return void
     */
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    /**
     * province
     *
     * @return void
     */
    public function province()
    {
        return $this->belongsTo(Province::class);
    }

    /**
     * city
     *
     * @return void
     */
    public function city()
    {
        return $this->belongsTo(City::class);
    }

    /**
     * district
     *
     * @return void
     */
    public function district()
    {
        return $this->belongsTo(District::class);
    }
}
