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
        <th>price</th>
      </tr>
    </thead>
    <tbody>
    @foreach($OrderDetail as $OrderDetailView)
      <tr>
        <td>{{$OrderDetailView->id}}</td>
        <td>€{{$OrderDetailView->totalPrice}}</td>
      </tr>
      @endforeach
    </div>
@endsection
