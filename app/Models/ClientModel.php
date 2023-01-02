<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientModel extends Model
{
    use HasFactory;

    public $table = 'clients';

    protected $guarded = [];

    protected $fillable = [
        'name',
        'logo',
        'created_at',
        'updated_at'
    ];
}