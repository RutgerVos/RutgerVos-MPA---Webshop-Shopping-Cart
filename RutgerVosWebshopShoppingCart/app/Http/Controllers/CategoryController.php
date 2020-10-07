<?php

namespace App\Http\Controllers;

use App\Category;

class CategoryController extends Controller
{
    /**
     * a function to see all categories
     *
     */
    public function index()
    {
        $categories = Category::all();
        return view('Category', ['Categories' => $categories]);
    }
    /**
     * a function to see all products of a single categorie
     *
     * @param string $name
     */
    public function categoryArticles($id)
    {
        // $articlesForCategory = article::where('categoryId', $id)
        //     ->orderBy('name', 'desc')
        //     ->take(10)
        //     ->get();

        $article = Category::find($id);

        return view('categoryArticles', ['article' => $article]);
    }
}
