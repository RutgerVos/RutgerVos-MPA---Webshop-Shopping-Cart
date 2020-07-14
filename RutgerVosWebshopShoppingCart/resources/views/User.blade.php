@extends('layouts.app')
@section('content')
    <div class="container">
@foreach($users as $user) 
{{ $user->name }}
@endforeach
<h1>orders:</h1>
<table class="table table">
    <thead>
      <tr>
        <th>qty</th>
        <th>item name</th>
        <th>price</th>
        <th>status</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>test</td>
        <td>placeholder</td>
        <td>being del</td>
      </tr>
      <tr>
        <th>Total price:</th>
      </tr>

    </div>
@endsection