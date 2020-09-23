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
     */
    public function categorieArticles($name)
    {
        $categorieForArticles = articles::where('categorie', $name)
            ->orderBy('name', 'desc')
            ->take(10)
            ->get();

        return view('categorie', ['categorie' => $categorieForArticles, 'name' => $name]);
    }
}
