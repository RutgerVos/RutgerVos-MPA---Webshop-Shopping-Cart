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
  <div class="row">
  @foreach($categoriesview as $Categorie)
    <div class="col-md-4">
    <a type='button'href="{{ route('CategoriesController.categorieArticles',['name'=>$Categorie->name]) }}">{{$Categorie->name}}</a>
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
