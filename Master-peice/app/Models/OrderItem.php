<?php

namespace App\Models;
use App\Models\Order;
use App\Models\product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;

    protected $table = 'order_items';
    protected $fillable = [

        'order_id',
        'prod_id',
        'price',
    ];

    public function orders()
    {
      return $this->belongsTo(Order::class);
    }

    public function products(){

        return $this->belongsTo(product::class,'prod_id','id');
    }
}
