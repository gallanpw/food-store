<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'category_id',
        'image',
        'title',
        'slug',
        'description',
        'price',
        'weight'
    ];

    /**
     * category
     *
     * @return void
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * ratings
     *
     * @return void
     */
    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }
}
