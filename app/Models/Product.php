<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = ['id'];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function purchases(){
        return $this->hasMany(Purchase::class);
    }

    public function saleDetails(){
        return $this->hasMany(SaleDetail::class);
    }
}
