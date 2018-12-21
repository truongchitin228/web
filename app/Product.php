<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $filltable=['name','description','price','amount','id_type','created_at','updated_at'];
    public function type_product(){
        return $this->belongsTo('App\TypeProduct','id_type','id');
    }
    public function bill_detail(){
        return $this->hasMany('App\BillDetail','id_product','id');
        
    }
}
