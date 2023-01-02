<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyProfileModel extends Model
{
    use HasFactory;

    public $table = 'company_profile';

    protected $guarded = [];

    protected $fillable = [
        'company_name',
        'company_business',
        'company_type',
        'company_start_date',
        'employee_number',
        'year_end',
        'video_link',
        'home_description',
        'page_description',
        'image',
        'created_at',
        'updated_at'
    ];
}