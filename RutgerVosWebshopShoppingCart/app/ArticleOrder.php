<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArticleOrder extends Model
{
    protected $table = 'article_order';
    protected $fillable = ['order_id', 'article_id'];
    public $timestamps = false;
}
