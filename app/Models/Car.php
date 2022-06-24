<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $table="cars";
    protected $fillable=[
        'brand',
        'manufacture',
        'kilomet',
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
    public function setFilenamesAttribute($value)
    {
        $this->attributes['images'] = json_encode($value);
    }
}
