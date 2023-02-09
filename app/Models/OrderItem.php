<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;
    protected $guarded =[];

    public function namaproduct(){
        return $this->belongTo(Product::class, 'product_id', 'id');
    }
}
