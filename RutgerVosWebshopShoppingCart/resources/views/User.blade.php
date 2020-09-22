@extends('layouts.app')
@section('content')
    <div class="container">
@foreach($users as $user)
username: {{ $user->name }}
@endforeach
<h1>orders:</h1>
<table class="table table">
    <thead>
      <tr>
      <th>orderId</th>
      <th>item name</th>
        <th>qty</th>
        <th>price</th>
      </tr>
    </thead>
    <tbody>
    @foreach($OrderDetail as $OrderDetailView)
      <tr>
        <td>{{$OrderDetailView->orderId}}</td>
        <td>{{$OrderDetailView->nameProducts}}</td>
        <td>{{$OrderDetailView->qty}}</td>
        <td>€{{$OrderDetailView->price}}</td>
      </tr>
      @endforeach
    </div>
@endsection
