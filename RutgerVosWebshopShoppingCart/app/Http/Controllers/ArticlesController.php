<?php

namespace App\Http\Controllers;

use App\Articles;

class ArticlesController extends Controller
{
    public function index()
    {
        $articles = Articles::all();
        return view('articles', ['articles' => $articles]);
    }
    public function detail($detail, $name, $price, $id)
    {
        $article = Articles::find($id);

        return view('articleDetail', ['detail' => $detail, 'name' => $name, 'price' => $price, 'id' => $id]);

    }

}
