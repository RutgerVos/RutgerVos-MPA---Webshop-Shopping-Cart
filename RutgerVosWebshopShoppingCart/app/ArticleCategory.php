<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * was force to use the table variable to fix this because it was trying to get the WRONG table
 */
class ArticleCategory extends Model
{
    protected $table = 'article_category';
    protected $fillable = ['article_id', 'category_id'];
    public $timestamps = false;
}
