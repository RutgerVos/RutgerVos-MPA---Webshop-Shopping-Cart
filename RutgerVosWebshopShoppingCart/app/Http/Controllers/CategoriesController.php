<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use App\Categories;

use App\Http\Requests;
use Session;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Categories::all();
    return view('Categories',['Categories'=>$categories]);
    }
}


