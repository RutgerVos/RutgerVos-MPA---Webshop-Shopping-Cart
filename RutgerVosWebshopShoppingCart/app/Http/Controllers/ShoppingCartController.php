<?php

namespace App\Http\Controllers;

use App\Articles;
use App\Cart;
use App\Order;
use App\OrderDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
     * add a item to cart form a categorie
     *
     * @param int $id
     */
    public function AddToCartCategorie($id, $name)
    {
        $Article = Articles::find($id);
        $cart = new Cart();
        $cart->add($Article, $Article->id);
        //return redirect()->route('articles.index');
        return view('CategoriesController.categorieArticles', ['name' => $name]);

    }
    /**
     *a way to checkout items form cart
     *
     */
    public function CheckOut()
    {
        $cart = new Cart();
        $items = $cart->getItemsFromCart();
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
        // the foreach in this function is made to loop through the items in the cart
        // and put in the database and the right columnn.
        // the variables uses here are for two things the users variable is uses
        // to get the userId who is currently ordering.
        // the order variable is uses to get the order model data uses for the database columns
        // so the databbase know where to insert the data in the correct table.
        // echo (Auth::id());
        // dd();

        $order = new Order();
        $order->userId = Auth::id();
        $order->save();
        foreach ($items as $item) {
            $OrderDetail = new OrderDetail();
            $OrderDetail->nameProducts = $item['name'];
            $OrderDetail->price = $item['price'];
            $OrderDetail->qty = $item['qty'];
            $OrderDetail->orderId = $order->id;
            $OrderDetail->productId = $item['id'];
            $OrderDetail->save();
        }
    }
}
