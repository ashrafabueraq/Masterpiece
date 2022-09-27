<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\OrderItem;


class order extends Model
{
    use HasFactory;

    protected $table = 'orders';
    protected $fillable = [
        'user_id',
        'fname',
        'lanme',
        'phone',
        'address',
        'city',
        'country',
        'pincode',
        'status',
        'message',


    ];

    public function orderitems(){

        return $this->hasMany(OrderItem::class);


    }

    
}
