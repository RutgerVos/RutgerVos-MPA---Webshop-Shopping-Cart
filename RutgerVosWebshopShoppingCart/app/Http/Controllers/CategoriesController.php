<?php

namespace App\Http\Controllers;

use App\Articles;
use App\Categories;

class CategoriesController extends Controller
{
    /**
     * a function to see all categories
     *
     */
    public function index()
    {
        $categories = Categories::all();
        return view('Categories', ['Categories' => $categories]);
    }
    /**
     * a function to see all products of a single categorie
     *
     * @param string $name
     */
    public function categorieArticles($name)
    {
        $articlesForCategory = articles::where('categorie', $name)
            ->orderBy('name', 'desc')
            ->take(10)
            ->get();

        return view('categorie', ['categorie' => $articlesForCategory, 'name' => $name]);
    }
}
