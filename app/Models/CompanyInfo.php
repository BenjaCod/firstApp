<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyInfo extends Model
{
    use HasFactory;

    // Specify the table name
    protected $table = 'companies_info';

    // Define the primary key as user_id
    protected $primaryKey = 'user_id';

    // Disable auto-incrementing (since user_id is not an auto-increment field)
    public $incrementing = false;

    // Define fillable fields
    protected $fillable = [ 
                            'user_id', 
                            'company_name', 
                            'company_followers',
                            'company_phone',
                            'company_email',
                            'company_headline',
                            'company_short_description',
                            'company_fb_link',
                            'company_insta_link',
                            'company_linkedin_link',
                            'company_long_desc_name',
                            'company_long_desc',
                            'company_requisites_name',
                            'company_requisites_desc',
                            'company_code',
                            'company_address',
                            'company_iv_desc',
                            'company_photos',
                            'company_main_photo',
                          ];

protected $casts = [
  'company_photos' => 'array', // Cast photos column to array
];

    // Ensure the primary key is treated as an integer
    protected $keyType = 'int';
}