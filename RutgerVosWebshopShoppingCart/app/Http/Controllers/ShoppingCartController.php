<?php

namespace App\Http\Controllers;
use App\Cart;
use Illuminate\Http\Request;
use App\Articles;
use Illuminate\Support\Facades\DB;
use App\Order;

class ShoppingCartController extends Controller
{
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
        $price = Articles::find($request->id);
        //dd($price['price']);
        $cart = new Cart();
        $cart->changeQuantity($Article,$request->id,$request->quantity,$price['price']);
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
        return redirect()->route('articles.index');


    }
     /*
    *a way to checkout items form cart
    */
    public function CheckOut(){
        $cart = new Cart();
        $items = $cart->getItemsFromCart();
        //$Article = Articles::find();
        $cart->CheckOutCart();
        $this->postCheckOutCart($items);
        return view('checkout');

    }
    public function postCheckOutCart($items)
    {
        $users = DB::table('users')->get('id');
        // var_dump($items);
        //  dd();
            foreach($items as $item){
                $order = new Order();
                $order->name  = $item['name'];
                $order->price  = $item['price'];
                $order->amount  = $item['qty'];
                $order->userdetail  = $users['id'];
                $order->save();
            }
}
}
