<?php

namespace App\Models\Eloquent;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CarBrandModel extends Model
{
    use HasFactory; //, SoftDeletes;

    public function carBrand()
    {
        return $this->belongsTo(CarBrand::class);
    }

//    public function carBrandModels()
//    {
//        return $this->hasMany(CarBrandModel::class);
//    }
}
