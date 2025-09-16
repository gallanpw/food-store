<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'image', 'name', 'email', 'password'
    ];
}
