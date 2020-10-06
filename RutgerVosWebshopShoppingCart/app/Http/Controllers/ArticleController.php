<?php

namespace App\Http\Controllers;

use App\Article;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return view('article', ['articles' => $articles]);
    }
    public function detail($detail, $name, $price, $id)
    {
        $article = Article::find($id);

        return view('articleDetail', ['detail' => $detail, 'name' => $name, 'price' => $price, 'id' => $id]);

    }

}
