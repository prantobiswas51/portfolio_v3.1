<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable=[
        'title',
        'slug',
        'featured_image',
        'content',
        'category_id',
        'status',
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
