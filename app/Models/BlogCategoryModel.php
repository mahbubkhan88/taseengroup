<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogCategoryModel extends Model
{
    use HasFactory;

    public $table = 'blog_category';

    protected $guarded = [];

    protected $fillable = [
        'name',
        'slug',
        'description',
        'created_at',
        'updated_at'
    ];


    //categorywise find post
    public function posts()
    {
        // return $this->hasMany('App\Models\BlogModel');
        // return $this->hasMany('App\Models\BlogModel');
        return $this->hasMany(BlogModel::class, 'blog_category_id', 'id');
    }
}