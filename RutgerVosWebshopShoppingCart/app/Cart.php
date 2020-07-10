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
        foreach($this->items as $key => $item){
            if ($item['item']['id'] == $id) {
                   $this->totalQty -= $this->items[$key]['qty'];
                    $this->totalPrice -=$this->items[$key]['price'];
                    unset($this->items[$key]);
                    Session::put('cart',$this);
            }
        }
        
    }
    /**
     * 
    *a function that change quantity based on items values.
    *
    */
    public function changeQuantity($item, $id, $quantity,$price) {
        //zet $quantity in parameter listr van method
        $this->totalQty -=$this->items[$id]['qty'];
        $this->totalPrice -=$this->items[$id]['price'];
        for ($index=0; $index < count($this->items); $index++) 
        { 
            if($item->id = $id) 
            {
            $this->items[$id]['qty'] = $quantity;
            $this->items[$id]['price'] = $price*$quantity;
            }
        }
        $this->totalPrice +=$this->items[$id]['price'];
        $this->totalQty +=$this->items[$id]['qty'];
        Session::put('cart',$this);
    }
    /*
    *
    *a function to calcute the total price
    *
    */
    public function calculateTotalPrice($cartItems){
        $totalValuePrice= 0;
        foreach ($this->items as $item) {
        $totalValuePrice =+ $item['price'];
        }
        $totalPrice =+ $totalValuePrice;
        return $this->totalPrice;
    }
    /*
    *a function to calcute the total Quantity
    */
    function calculateTotalQuantity($cartItems){
        $TotalValueQuantity= 0;
        foreach ($this->items as $item) {
         $TotalValueQuantity =+ $item['qty'];
        }
        $totalQty =+ $TotalValueQuantity;
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
    public function CheckOutCart()
    {
        if (!Session::has('cart')) {
            return view('shoppingcart',['articles'=>null]);
         }
         $oldCart = Session::get('cart');
         $cart = new Cart($oldCart);
         $total = $cart->totalPrice;
         return $total;
    }
    public function postCheckOutCart()
    {
        DB::table('orders')->insert([
            ['name' => 'placeholder'],
            ['price' => 'placeholder'],
            ['amount' => 'placeholder'],
            ['detail' => 'placeholder']
        ]);

    }
}
