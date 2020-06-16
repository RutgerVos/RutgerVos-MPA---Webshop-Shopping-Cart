<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Articles;
use Illuminate\Http\Request;

use App\Http\Requests;
use Session;

class ArticlesController extends Controller
{
    public function index()
    {
   $articles = Articles::all();
    return view('articles',['articles'=>$articles]);
    }

  
}
