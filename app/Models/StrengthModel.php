<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StrengthModel extends Model
{
    use HasFactory;

    public $table = 'our_strengths';

    protected $guarded = [];

    protected $fillable = [
        'name',
        'description',
        'image',
        'created_at',
        'updated_at'
    ];
}