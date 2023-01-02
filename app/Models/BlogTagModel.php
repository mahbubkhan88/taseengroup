<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogTagModel extends Model
{
    use HasFactory;

    public $table = 'blog_tag';

    protected $guarded = [];

    protected $fillable = [
        'name',
        'slug',
        'description',
        'created_at',
        'updated_at'
    ];

    //tagwise find post
    public function posts()
    {
        // return $this->belongsToMany('App\Models\BlogModel');
        return $this->belongsToMany('App\Models\BlogModel', 'post_tag', 'blog_id', 'tag_id');
    }
}