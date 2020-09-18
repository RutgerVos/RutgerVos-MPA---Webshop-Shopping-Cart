<?php

namespace App\Http\Controllers;

use App\Articles;
use App\Cart;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShoppingCartController extends Controller
{
    /**
     * remove all of one item from the cart.
     *
     * @param int $id
     */
    public function removeCartItems($id)
    {
        $Article = Articles::find($id);
        $cart = new Cart();
        $cart->removeAllItems($Article, $Article->id);
        return redirect()->route('ShoppingCart.getCartItems');
    }

    /**
     * equal all of one item to a qty from the cart.
     *
     * @param request $request
     */
    public function changeCartItem(Request $request)
    {
        $Article = Articles::find($request->id);
        $price = Articles::find($request->id);
        //dd($price['price']);
        $cart = new Cart();
        $cart->changeQuantity($Article, $request->id, $request->quantity, $price['price']);
        return redirect()->route('ShoppingCart.getCartItems');
    }

    /**
     * Get items from the cart.
     *
     */
    public function getCartItems()
    {
        $cart = new Cart();
        $cartItems = $cart->getItemsFromCart();

        return view('shoppingcart', ['articles' => $cartItems, 'totalPrice' => $cart->calculateTotalPrice($cartItems), 'totalQty' => $cart->calculateTotalQuantity($cartItems)]);
    }
    /**
     *add a item to the cart
     *
     * @param int $id
     */
    public function getAddToCart($id)
    {
        $Article = Articles::find($id);
        $cart = new Cart();
        $cart->add($Article, $Article->id);
        return redirect()->route('articles.index');

    }
    /**
     *a way to checkout items form cart
     *
     */
    public function CheckOut()
    {
        $cart = new Cart();
        $items = $cart->getItemsFromCart();
        //$Article = Articles::find();
        $cart->CheckOutCart();
        $this->postCheckOutCart($items);
        $cart->CheckOutCartEmpty();
        return view('checkout');

    }
    /**
     * the function made to loop through items/products
     * the input is item a array
     * the output is what is inseted into the database
     *
     * @param array $items
     */
    public function postCheckOutCart($items)
    {
        /**
         * the foreach in this function is made to loop through the items in the cart
         * and put in the database and the right columnn.
         * the variables uses here are for two things the users variable is uses
         * to get the userId who is currently ordering.
         * the order variable is uses to get the order model data uses for the database columns
         * so the databbase know where to insert the data in the correct table.
         */
        $user = DB::table('users')->pluck('id');
        $order = new Order();
        $order->userdetail = $user;
        $order->save();
        foreach ($items as $item) {
            $orderDetail = new Order_Detail();
            $orderDetail->nameProducts = $item['name'];
            $orderDetail->Price = $item['price'];
            $orderDetail->qty = $item['qty'];
            $orderDetail->orderId = $order->id;
            $orderdetail->productId = $item['id'];
            $orderdetail->save();
        }
    }
}
