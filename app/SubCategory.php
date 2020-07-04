<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    protected $fillable = [
        'category_id', 'name'
    ];

    public function image()
    {
        return $this->morphOne(SiteImage::class, 'imageable');
    }
}
