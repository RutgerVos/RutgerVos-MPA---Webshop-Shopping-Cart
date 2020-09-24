@extends('layouts.app')
@section('title')
categorie
@endsection
@section('content')
    <div class="container">
<h1>{{$name}}</h1>
<body>
@foreach($categorie->chunk(3) as $categorieview)
<div class="container">
  <div class="row">
  @foreach($categorieview as $categorie)
  <div class="col-md-4">
  <h2>{{$categorie->name}}</h2>
  <div><p>price:€{{$categorie->price}}</p></div>
      <div class="thumbnail">
        <a href="">
          <img src="" alt="" style="">
          <div class="caption">
            <a type="button" class="btn btn-outline-primary"href="{{route('ShoppingCart.AddToCartCategorie',['id'=> $categorie->id,'name'=>$name])}}">add to cart</a>
          </div>
        </a>
      </div>
    </div>
    @endforeach
</div>
    </div>
    @endforeach
    </body>
@endsection
