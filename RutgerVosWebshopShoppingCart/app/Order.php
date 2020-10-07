<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['userId', 'totalPrice'];
    public function article()
    {
        return $this->belongsToMany('App\Article')->withPivot('qty')->withPivot('price');
    }
}
