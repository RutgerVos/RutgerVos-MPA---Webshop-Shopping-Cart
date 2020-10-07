@extends('layouts.app')
@section('content')
    <div class="container">
<h1>ordersdetails:</h1>
<table class="table table">
    <thead>
      <tr>
      <th>Article-Name</th>
        <th>price</th>
        <th>qty</th>
        <th>description</th>
      </tr>
    </thead>
    <tbody>
    @foreach($detail as $OrderDetail)
      <tr>
      <td>{{$OrderDetail->name}}</td>
      <td>€{{$OrderDetail->pivot->price}}</td>
      <td>{{$OrderDetail->pivot->qty}}</td>
      <td>{{$OrderDetail->description}}</td>
      </tr>
      @endforeach
    </div>
@endsection
