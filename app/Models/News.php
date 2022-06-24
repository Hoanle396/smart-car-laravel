<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $table="news";
    protected $fillable=[
        'images',
        'name_vi',
        'description_vi',
        'name_en',
        'description_en',
        'name_jp',
        'description_jp',
        'name_ko',
        'description_ko',
        'name_cn',
        'description_cn',
        'name_pt',
        'description_pt'
    ];
}
