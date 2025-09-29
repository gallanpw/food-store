<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

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

    /**
     * boot
     *
     * @return void
     */
    protected static function boot()
    {
        parent::boot();

        // Generate slug before saving
        static::saving(function ($product) {
            if (empty($product->slug)) {
                $product->slug = Str::slug($product->title);
            }
        });
    }
}
