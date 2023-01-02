<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectModel extends Model
{
    use HasFactory;

    public $table = 'projects';

    protected $guarded = [];

    protected $fillable = [
        'project_title',
        'slug',
        'project_name',
        'client_name',
        'project_category_id',
        'date',
        'location',
        'project_link',
        'description',
        'image',
        'created_at',
        'updated_at'
    ];


    //Find Project Category Data
    public function projectCat()
    {
        return $this->belongsTo(ProjectCategoryModel::class, 'project_category_id', 'id');
    }
}