<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'sub_category_id',
        'title',
        'price',
        'product_code',
        'total_product',
        'slug',
        'isPublished',
        'description'
    ];
    public function images()
    {
        return $this->morphMany(SiteImage::class, 'imageable');
    }
}
