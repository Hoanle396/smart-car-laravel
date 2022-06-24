<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BrandService extends Model
{
    use HasFactory;
    protected $table="services_brands";
    protected $fillable=[
        'images',
        'name_vi',
        'name_en',
        'name_jp',
        'name_ko',
        'name_cn',
        'name_pt'
    ];
}
