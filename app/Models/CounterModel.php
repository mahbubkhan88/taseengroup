<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CounterModel extends Model
{
    use HasFactory;

    public $table = 'counters';

    protected $guarded = [];

    protected $fillable = [
        'title',
        'counter',
        'icon',
        'created_at',
        'updated_at'
    ];
}