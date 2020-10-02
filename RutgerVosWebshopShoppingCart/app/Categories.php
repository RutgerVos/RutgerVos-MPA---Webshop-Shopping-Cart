<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $fillable = ['name'];

    public function article()
    {
        return $this->hasMany('App\Models\Articles');
    }
}
