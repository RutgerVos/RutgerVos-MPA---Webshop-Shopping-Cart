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
            <strong>{{$article['item']['name']}}</strong>
            <span class="label label-success">price:€{{$article['price']}}</span>
            <div class="btn-group">
                <form action="{{route('ShoppingCart.changeCartItem')}}" method="post">
                <label for="quantity">Quantity</label>
                <input type="number" id="quantity" name="quantity" min="1" max="100" value="{{$article['qty']}}">
                @csrf
                <input type="hidden" value="{{$article['item']['id']}}" name="id">
                <input type="submit" class='btn btn-outline-danger' value="make equal to selected amount of this product">
                </form>
                <div class="btn-group">
                <form action="{{route('ShoppingCart.removeCartItems',['id'=>$article['item']['id']])}}">
                <input type="submit" class='btn btn-outline-danger' value="remove all of this product">
                </form>
                <div class="row">
                <div class="col-sm-7 col-md-7 col-md-offset-5 col-sm-offset-5">
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
<a type="button" href="{{ route('Checkout') }}" class='btn btn-success'value="">Checkout</a>
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