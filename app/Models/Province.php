<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];

    /**
     * cities
     *
     * @return void
     */
    public function cities()
    {
        return $this->hasMany(City::class);
    }
}
