<?php
namespace App;
use Session;

class Cart
{
    public $items = [];
    public $totalQty = 0;
    public $totalPrice = 0;

    /**
     * Construct the ShoppingCart.
     */
    public function __construct(){
        if (Session::has('cart')) {
            $oldCart = Session::get('cart');
            $this->items = $oldCart->items;
            $this->totalQty = $oldCart->totalQty;
            $this->totalPrice = $oldCart->totalPrice;
        }
    }
    /*
    *a function that creates data based on items values.
    *
    */
    public function add($item, $id){
        $storedItem = ['qty'=> 0, 'price'=>$item->price,'item'=>$item];

        if ($this->items) {
            if (array_key_exists($id,$this->items)) {
                $storedItem = $this->items[$id];
            }
        }

        $storedItem['qty']++;
        $storedItem['price']= $item->price*$storedItem['qty'];
        $this->items[$id] = $storedItem;
        $this->totalQty++;
        $this->totalPrice += $item->price;
        Session::put('cart',$this);
    }
    public function removeOneItem($item, $id){
        $storedItem = ['qty'=> 0, 'price'=>$item->price,'item'=>$item];

        if ($this->items) {
            if (array_key_exists($id,$this->items)) {
                $storedItem = $this->items[$id];
            }
        }

        $storedItem['qty']--;
        $storedItem['price']= $item->price*$storedItem['qty'];
        $this->items[$id] = $storedItem;
        $this->totalQty--;
        $this->totalPrice += $item->price;
        
        
    }

    /**
     * Get items from the cart.
     * @return array
     */
    public function getItemsFromCart() {
        return $this->items;
    }
    public function getCheckOut()
    {
        if (!Session::has('cart')) {
            return view('shoppingcart',['articles'=>null]);
         }
         $oldCart = Session::get('cart');
         $cart = new Cart($oldCart);
         $total = $cart->totalPrice;
         return view('checkout',['total'=> $total]);

    }
}
