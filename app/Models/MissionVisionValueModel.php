<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MissionVisionValueModel extends Model
{
    use HasFactory;

    public $table = 'mission_vision_value';

    protected $guarded = [];

    protected $fillable = [
        'title',
        'description',
        'image',
        'created_at',
        'updated_at'
    ];
}