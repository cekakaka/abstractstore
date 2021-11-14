<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductGallery extends Model
{
    protected $table = 'products_galleries';

    protected $fillable = [
        'photos','products_id'
    ];

    protected $hidden =[

    ];

    public function product(){
        return $this->belongsTo(Product::class,'products_id','id');
    }
}
