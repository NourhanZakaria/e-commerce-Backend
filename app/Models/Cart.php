<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable=["quantity","user_id"];

    function product(){
        return $this->belongsToMany(Product::class,"product_cart","cart_id","product_id");
    }

    function user(){
        return $this->belongsTo(User::class);
    }

}
