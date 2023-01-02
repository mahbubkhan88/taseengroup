<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectCategoryModel extends Model
{
    use HasFactory;

    public $table = 'project_category';

    protected $guarded = [];

    protected $fillable = [
        'name',
        'description',
        'created_at',
        'updated_at'
    ];
}