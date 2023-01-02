<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ManagementMessageModel extends Model
{
    use HasFactory;

    public $table = 'management_messages';

    protected $guarded = [];

    protected $fillable = [
        'title',
        'name',
        'designation',
        'description',
        'facebook_link',
        'twitter_link',
        'linkedin_link',
        'image',
        'created_at',
        'updated_at'
    ];
}