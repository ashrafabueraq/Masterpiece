<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cart;

class product extends Model
{
    use HasFactory;

    protected $fillable = [
      'product_name',
      'product_desc',
      'product_image',
      'price',
      'status',
     
  ];

    public function category(){

        return $this->belongsTo(Category::class,'category_id');
    }

    public function user()
    {
      return $this->belongsTo(User::class);
    }

    public function carts(){
        
      return $this->hasMany(Cart::class);
  }
}
