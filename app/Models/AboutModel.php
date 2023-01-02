<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutModel extends Model
{
    use HasFactory;

    public $table = 'abouts';

    protected $guarded = [];

    protected $fillable = [
        'title',
        'sub_title',
        'description',
        'image',
        'created_at',
        'updated_at'
    ];
}