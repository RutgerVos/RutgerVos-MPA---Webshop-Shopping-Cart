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
    /**
     * remove all of one item from the cart.
     */
    public function removeCartItems($id)
        {
            $Article = Articles::find($id);
            $cart = new Cart();
            $cart->removeAllItems($Article,$Article->id);
            return redirect()->route('ShoppingCart.getCartItems');
        }

         /**
     * equal all of one item to a qty from the cart.
     */
    public function changeCartItem(Request $request)
    {
        $Article = Articles::find($request->id);
        $cart = new Cart();
        $cart->changeQuantity($Article,$request->id,$request->quantity);
        return redirect()->route('ShoppingCart.getCartItems');
    }

    /**
     * Get items from the cart.
     */
    public function getCartItems()
    {
        $cart = new Cart();
        $cartItems = $cart->getItemsFromCart();

        return view('shoppingcart',['articles'=>$cartItems,'totalPrice'=>$cart->calculateTotalPrice($cartItems),'totalQty'=>$cart->calculateTotalQuantity($cartItems)]);
    }
    /*
    *add a item to the cart
    */
    public function getAddToCart($id)
    {
        $Article = Articles::find($id);
        $cart = new Cart();
        $cart->add($Article,$Article->id);
        //Session::put('cart',$cart);

        //$request->session()->put('cart',$cart);
        //dd($request->session()->get('cart'));
        return redirect()->route('articles.index');


    }
    public function getCheckOut(){
        $cart = new Cart();
        $total= $cart->getCheckOutCart();
        return view('checkout',['total'=> $total]);

    }


}
