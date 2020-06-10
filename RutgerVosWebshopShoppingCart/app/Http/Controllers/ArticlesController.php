<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Articles;
use App\Cart;
use Session;

class ArticlesController extends Controller
{
    public function index()
    {
   $articles = Articles::all();
    return view('articles',['articles'=>$articles]);
    }
    public function getAddToCart(Requests $request,$id)
    {
        $Article = Articles::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldcart);
        $cart->add($Article,$Article->id);

        $request->session()->put('cart');
        dd($request);
        return redirect()->route('article');


    }
}
