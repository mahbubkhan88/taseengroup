<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SettingModel extends Model
{
    use HasFactory;

    public $table = 'settings';

    protected $guarded = [];

    protected $fillable = [
        'telephone',
        'fax',
        'phone_one',
        'phone_two',
        'email_address',
        'corporate_office',
        'registered_office',
        'facebook_link',
        'linkedin_link',
        'youtube_link',
        'instagram_link',
        'footer_copyright',
        'description',
        'logo',
        'created_at',
        'updated_at'
    ];
}