<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['name', 'price', 'description'];
    public function category()
    {
        return $this->belongsToMany('App\Category');
    }
    public function order()
    {
        return $this->belongsToMany('App\Order');
    }
}
