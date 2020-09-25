@extends('layouts.app')
@section('title')
Articles
@endsection
@section('content')
    <div class="container">
<h1>Articles</h1>
<body>
@foreach($articles->chunk(3) as $articleview)
<div class="container">
  <div class="row">
  @foreach($articleview as $article)
  <div class="col-md-4">
  <h2>{{ $article->name}}</h2>
  <a href="{{ route('articles.detail',['detail'=>$article->description ,'name'=>$article->name]) }}">details</a>
  <div><p>price:€{{ $article->price}}</p></div>
      <div class="thumbnail">
        <a href="">
          <img src="" alt="" style="">
          <div class="caption">
            <a type="button" class="btn btn-outline-primary"href="{{ route('ShoppingCart.getAddToCart',['id'=>$article->id]) }}">add to cart</a>
          </div>
        </a>
      </div>
    </div>
</div>
  @endforeach
    </div>
@endforeach
    </body>
@endsection
