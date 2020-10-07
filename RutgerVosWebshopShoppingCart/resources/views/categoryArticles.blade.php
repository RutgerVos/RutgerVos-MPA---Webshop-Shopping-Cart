@extends('layouts.app')
@section('title')
category
@endsection
@section('content')
    <div class="container">
<h1>placeholder name:</h1>
<body>
<div class="container">
  <div class="row">
  @foreach($article->articles as $articles)
  <div class="col-md-4">
  <h2>{{$articles->name}}</h2>
  <div><p>price:€{{$articles->price}}</p></div>
      <div class="thumbnail">
        <a href="">
          <img src="" alt="" style="">
          <div class="caption">
            <a type="button" class="btn btn-outline-primary"href="{{route('ShoppingCart.AddToCartCategory',['id'=> $articles->id,'categoryId'=>$article])}}">add to cart</a>
          </div>
        </a>
      </div>
    </div>
    @endforeach
</div>
    </div>
    </body>
@endsection
