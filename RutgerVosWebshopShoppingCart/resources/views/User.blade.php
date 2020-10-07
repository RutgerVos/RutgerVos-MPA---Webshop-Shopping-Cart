@extends('layouts.app')
@section('content')
    <div class="container">
<h1>orders:</h1>
<table class="table table">
    <thead>
      <tr>
      <th>orderId</th>
        <th>price</th>
        <th>OrderDetail</th>
      </tr>
    </thead>
    <tbody>
    @foreach($OrderDetail as $OrderDetailView)
      <tr>
        <td>{{$OrderDetailView->id}}</td>
        <td>€{{$OrderDetailView->totalPrice}}</td>
        <td><a href="{{route('UsersController.orderDetails',['id'=>$OrderDetailView->id] )}}">details</a></td>
      </tr>
      @endforeach
    </div>
@endsection
