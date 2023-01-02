<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientFeedbackModel extends Model
{
    use HasFactory;

    public $table = 'client_feedback';

    protected $guarded = [];

    protected $fillable = [
        'client_name',
        'designation',
        'comment',
        'image',
        'created_at',
        'updated_at'
    ];
}