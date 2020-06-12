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
    public function getAddToCart(Request $request,$id)
    {
        $Article = Articles::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($Article,$Article->id);

        $request->session()->put('cart',$cart);
        //dd($request->session()->get('cart'));
        return redirect()->route('articles.index');


    }
    public function getCart()
    {
        if (!Session::has('cart')) {
           return view('shoppingcart',['articles'=>null]);
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('shoppingcart',['articles'=>$cart->items,'totalPrice'=>$cart->totalPrice]);
    }
    public function getCheckout()
    {
        if (!Session::has('cart')) {
            return view('shoppingcart',['articles'=>null]);
         }
         $oldCart = Session::get('cart');
         $cart = new Cart($oldCart);
         $total = $cart->totalPrice;
         return view('checkout');

    }
}
