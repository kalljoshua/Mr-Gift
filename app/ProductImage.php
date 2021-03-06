<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    protected $fillable = array('image');

    public function product(){
        return $this->belongsTo('App\Product');
    }
}
