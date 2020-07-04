<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\SiteImage;

class Category extends Model
{
    protected $fillable = [
        'name','description'
    ];

    public function image()
    {
        return $this->morphOne(SiteImage::class, 'imageable');
    }

   

}
