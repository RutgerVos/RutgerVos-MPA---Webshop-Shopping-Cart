@extends('layouts.app')
@section('title')
shoppingcart
@endsection
@section('content')
@if(Session::has('cart'))
<div class="row">
    <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
            <ul class="list-group">
        @foreach($articles as $article)
            <li class="list-group-item">
            <span class="badge">{{$article['qty']}}</span>
            <strong>{{$article['item']['title']}}</strong>
            <span class="label label-success">price€{{$article['price']}}</span>
            <div class="btn-group">
                <form action="{{route('ShoppingCart.removeCartItem')}}">
                <label for="quantity">Quantity</label>
                <input type="number" id="quantity" name="quantity" min="1" max="5" value='1'>
                </form>
                <div class="row">
                <div class="col-sm-7 col-md-7 col-md-offset-5 col-sm-offset-5">
                <a href="{{route('ShoppingCart.removeCartItem')}}" type="button" class='btn btn-outline-danger'>remove all of this product</a>
                </div>
                </div>
            </div>
            <div class="btn-group">
            </div>
            </li>
        @endforeach
            </ul>
</div>
</div>
<div class="row">
<div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
<strong>Total:€{{$totalPrice}}</strong>
</div>
</div>
<hr>
<div class="row">
<div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
<input type="submit" href="{{ route('getCheckout') }}" class='btn btn-success'value="Checkout">
</div>
</div>
@else
<div class="row">
<div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
<h2>no items in Cart!</h2>
</div>
</div>

@endif
@endsection