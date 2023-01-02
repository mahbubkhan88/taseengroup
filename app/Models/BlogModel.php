<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogModel extends Model
{
    use HasFactory;

    public $table = 'blogs';

    protected $guarded = [];

    protected $fillable = [
        'user_id',
        'blog_category_id',
        'title',
        'slug',
        'description',
        'image',
        'created_at',
        'updated_at'
    ];

    //find user for post
    public function user()
    {
        return $this->belongsTo('App\Models\User');
        // return $this->belongsTo(User::class, 'user_id', 'id');
    }

    //find blog category data for post
    public function categories()
    {
        // return $this->belongsTo('App\Models\BlogCategoryModel');
        return $this->belongsTo(BlogCategoryModel::class, 'blog_category_id', 'id');
    }

    //find blog tag data for post
    public function tags()
    {
        return $this->belongsToMany('App\Models\BlogTagModel', 'post_tag', 'blog_id', 'tag_id');
    }
}