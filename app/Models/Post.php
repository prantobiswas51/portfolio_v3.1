<?php

namespace App\Models;

use Illuminate\Support\Str;
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

    protected static function boot()
    {
        parent::boot();

        static::saving(function ($post) {
            // Check if the name has been modified
            if ($post->isDirty('title')) {
                $slug = Str::slug($post->title);
                $count = static::where('slug', 'like', "$slug%")->count();
                $post->slug = $count > 0 ? $slug . '_' . ($count + 1) : $slug;
            }
        });
    }
}
