<?php

namespace App\Http\Controllers;
use App\Cart;
use Illuminate\Http\Request;
use App\Articles;

class ShoppingCartController extends Controller
{
    
    // public function addtoCart(){
    //     $articleid;

    // }

    public function caculateCart(){

    }
    public function removefromCart(){

    }

    /**
     * Get items from the cart.
     */
    public function getCartItems(Request $request)
    {
        $cart = new Cart($request);
        $cartItems = $cart->getItemsFromCart();

        return view('shoppingcart',['articles'=>$cartItems,'totalPrice'=>$cart->totalPrice]);
    }
    /*
    *
    */
    public function getAddToCart(Request $request,$id)
    {
        $Article = Articles::find($id);
        $cart = new Cart($request);
        $cart->add($Article,$Article->id);

        //$request->session()->put('cart',$cart);
        //dd($request->session()->get('cart'));
        return redirect()->route('articles.index');


    }


}
