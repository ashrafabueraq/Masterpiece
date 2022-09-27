<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Products;

class cart extends Model
{
    use HasFactory;

    protected $fillable = [
       
        'user_id',  
        'prod_id',
    ];

    public function user(){

        return $this->belongsTo(User::class,'user_id', 'id');
    }

    public function products(){

        return $this->belongsTo(product::class,'prod_id','id');
    }


}
