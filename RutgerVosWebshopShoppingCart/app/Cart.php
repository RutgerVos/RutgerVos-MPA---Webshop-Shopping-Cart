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

    /**
     * 
    *a function that remove data based on items values.
    *
    */
    public function removeAllItems($item, $id){
        //dd($item['id']);
        foreach($this->items as $key => $item){
            if ($item['item']['id'] == $id) {
                   $this->totalQty -= $this->items[$key]['qty'];
                    $this->totalPrice -= $this->items[$key]['qty'] * $this->items[$key]['price'];
                    unset( $this->items[$key] );
                    Session::put('cart',$this);
                    //dd(session('cart'));
            }
        }
        
    }
    /**
     * 
    *a function that change data based on items values.
    *
    */
    public function changeQuantity($item, $id, $quantity) { // verander naam naar iets beters
        // zet $quantity in parameter listr van method
     foreach ($this->items as $item) {
        if ($item['item']['id'] == $id) {
            $this->quantity = $quantity;
         Session::put('cart',$this);
        }
     }  
        
    }
    public function calculateTotalPrice($cartItems){
        $TotalValuePrice= 0;
        foreach ($this->items as $item) {
        $TotalValuePrice + $item['price'];
        
        }
        $TotalValuePrice - $item['price'];
        return $this->totalPrice;
    }

    function calculateTotalQuantity(){
        return $this->totalQty;

    }

    /**
     * Get items from the cart.
     * @return array
     */
    public function getItemsFromCart() {
        return $this->items;
    }
    /*
    *checking out for cart.
    */
    public function getCheckOutCart()
    {
        if (!Session::has('cart')) {
            return view('shoppingcart',['articles'=>null]);
         }
         $oldCart = Session::get('cart');
         $cart = new Cart($oldCart);
         $total = $cart->totalPrice;
         return $total;
         //return redirect()->route('getCheckout',['total'=> $total]);

         //return view('checkout',['total'=> $total]);

    }
    public function postCheckOutCart()
    {
        DB::table('orders')->insert([
            ['email' => 'taylor@example.com', 'votes' => 0],
            ['email' => 'dayle@example.com', 'votes' => 0]
        ]);

    }
}
