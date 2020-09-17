<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order_Detail extends Model
{
    protected $fillable = ['nameProducts', 'qty', 'price', 'productId', 'orderId'];
}
