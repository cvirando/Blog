<?php

/**
 * Made by CV. IRANDO
 * https://irando.co.id ©2023
 * info@irando.co.id
 */

namespace Modules\Blog\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Blog\Entities\Category;

class Post extends Model
{
    use HasFactory;

    protected $table = 'blog_posts';

    protected $fillable = [
        'category_id',
        'name',
        'slug',
        'photo',
        'description',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
