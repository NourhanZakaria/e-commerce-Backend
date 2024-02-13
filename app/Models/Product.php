<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable=["name","image","stock","price","category_id"];

    
    function category(){

        return $this->belongsTo(Category::class);
    }
   
    function cart(){
        return $this->belongsToMany(Cart::class,"product_cart","product_id","cart_id");
    }

    function order(){
        return $this->belongsToMany(Order::class,"product_order","product_id","order_id");
    }
  
}
