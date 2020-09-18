<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $fillable = ['nameProducts', 'qty', 'price', 'productId', 'orderId'];
}
