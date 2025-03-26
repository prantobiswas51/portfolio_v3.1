<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable=[
        'name',
        'slug',
        'logo',
        'description'
    ];

    protected static function boot()
    {
        parent::boot();

        static::saving(function ($category) {
            // Check if the name has been modified
            if ($category->isDirty('name')) {
                $slug = Str::slug($category->name);
                $count = static::where('slug', 'like', "$slug%")->count();
                $category->slug = $count > 0 ? $slug . '_' . ($count + 1) : $slug;
            }
        });
    }

    
}
