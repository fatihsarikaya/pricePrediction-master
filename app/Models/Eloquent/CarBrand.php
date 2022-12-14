<?php

namespace App\Models\Eloquent;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CarBrand extends Model
{
    use HasFactory; //, SoftDeletes;

    public function carBrandModels()
    {
        return $this->hasMany(CarBrandModel::class);
    }

//    public function carBrands()
//    {
//        return $this->belongsTo(CarBrand::class);
//    }
}
