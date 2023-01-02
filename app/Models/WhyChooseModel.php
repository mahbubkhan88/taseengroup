<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WhyChooseModel extends Model
{
    use HasFactory;

    public $table = 'why_choose_us';

    protected $guarded = [];

    protected $fillable = [
        'name',
        'description',
        'image',
        'created_at',
        'updated_at'
    ];
}