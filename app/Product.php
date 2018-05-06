<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function occassion()
    {
        return $this->belongsTo('App\Occassion');
    }

    public function reviews()
    {
        return $this->hasMany('App\Review');
    }

    public function banner()
    {
        return $this->hasMany('App\Banner');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function sub_category()
    {
        return $this->belongsTo('App\SubCategory');
    }

    public function type()
    {
        return $this->belongsTo('App\Type');
    }

    public function whishlists_to_user(){
        return $this->belongsToMany('App\User','whishlists');
    }

    public function admin()
    {
        return $this->belongsTo('App\Admin');
    }

    public function features(){
        return $this->hasMany('App\ProductFeature');
    }

    public function images(){
        return $this->hasMany('App\ProductImage');
    }
}
