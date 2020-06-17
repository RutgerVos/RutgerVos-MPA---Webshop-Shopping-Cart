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
            <span class="label label-success">price{{$article['price']}}</span>
            <div class="btn-group">
            <button type="button"class="btn.btn-primary.btn-xs.dropown-toggle" data-toggle="dropdown">Reduce<span class="caret"></span></button>
            <ul class="dropdown-menu">
            <li><a href=""class="btn btn-outline-primary">Reduce by 1</a></li>
            <li><a href="" class="btn btn-outline-primary">Reduce by all</a></li>
            </ul>
            </div>
            <div class="btn-group">
            <button type="button"class="btn.btn-primary.btn-xs.dropown-toggle" data-toggle="dropdown">increase qty<span class="caret"></span></button>
            <ul class="dropdown-menu">
            <li><a href=""class="btn btn-outline-primary">increase by 1</a></li>
            <li><a href="" class="btn btn-outline-primary">increase by 3</a></li>
            </ul>
            </div>
            </li>
        @endforeach
            </ul>
</div>
</div>
<div class="row">
<div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
<strong>Total:{{$totalPrice}}</strong>
</div>
</div>
<hr>
<div class="row">
<div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
<a href="{{ route('getCheckout') }}" type="button" class='btn btn-success'>Checkout</a>
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