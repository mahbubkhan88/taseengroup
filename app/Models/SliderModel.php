<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SliderModel extends Model
{
    use HasFactory;

    public $table = 'sliders';

    protected $guarded = [];

    protected $fillable = [
        'title',
        'description',
        'image',
        'created_at',
        'updated_at'
    ];
}