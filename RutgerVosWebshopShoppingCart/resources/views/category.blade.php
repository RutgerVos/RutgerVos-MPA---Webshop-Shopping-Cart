@extends('layouts.app')
@section('title')
categories
@endsection
@section('content')
    <div class="container">
<h1>categories</h1>
<body>
@foreach($Categories->chunk(3) as $categoriesview)
<div class="container">
  @foreach($categoriesview as $Category)
  <div class="row">
    <div class="col-md-4">
    <a type='button'href="{{ route('CategoryController.categoryArticles',['id'=>$Category->id]) }}">{{$Category->name}}</a>
      <div class="thumbnail">
        <a href="">
          <img src="" alt="" style="">
          <div class="caption">
          </div>
        </a>
      </div>
    </div>
</div>
@endforeach
    </div>
    </body>
    @endforeach
    </div>
@endsection
