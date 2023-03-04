<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $guarded =[];
    public $timestamps = false;
    public function Order() {
        return $this->belongsTo(Product::class, 'product_id', 'id', 'user_id');
    }
}
