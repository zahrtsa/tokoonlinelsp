<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;
    protected $guarded =[];

    // public function orderitem(){
    //     return $this->belongsTo(Product::class, 'product_id', 'id', 'user_id');
    // }
}
