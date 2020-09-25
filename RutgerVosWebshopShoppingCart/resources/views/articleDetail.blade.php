@extends('layouts.app')
@section('title')
ArticleDetail
@endsection
@section('content')
<div class="container">
<h1>{{$name}}</h1>
<body>
<div class="container">
  <div class="row">
  <div class="col-md-4">
  <h2></h2>
      <div class="thumbnail">
      <p>{{$detail}}</p>
        <a href="">
          <img src="" alt="" style="">
          <div class="caption">
          </div>
        </a>
      </div>
    </div>
</div>

    </div>
    </body>
    @endsection
