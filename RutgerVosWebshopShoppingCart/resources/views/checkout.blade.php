@extends('layouts.app')
@section('title')
checkout
@endsection
@section('content')
<div class="row">
    <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
    <h1>checkout</h1>
    <h4>Your total:€{{$total}}</h4>
    <form action="{{route('checkout')}}" method="post">
    <div class="row">
    <div class="div col-xs-12">
    <div class="div form-group">
    <label for="name">name</label>
    <input type="text" class="form-control" id="name"required>
    </div>
    </div>
    <div class="div col-xs-12">
    <div class="div form-group">
    <label for="adress">adress</label>
    <input type="text" class="form-control" id="adress"required>
    </div>
    </div>
    <div class="div col-xs-12">
    <div class="div form-group">
    <label for="card">cardHolderName</label>
    <input type="text" class="form-control" id="card"required>
    </div>
    </div>
    <div class="div col-xs-12">
    <div class="div form-group">
    <label for="card">creditCardNumber</label>
    <input type="text" class="form-control" id="card"required>
    </div>
    </div>
    <div class="div col-xs-12">
    <div class="div form-group">
    <label for="card">expirationMonth</label>
    <input type="text" class="form-control" id="card"required>
    </div>
    </div>
    <div class="div col-xs-12">
    <div class="div form-group">
    <label for="card">expirationYear</label>
    <input type="text" class="form-control" id="card"required>
    </div>
    </div>
    <div class="div col-xs-12">
    <div class="div form-group">
    <label for="card-cvc">CVC</label>
    <input type="text" class="form-control" id="card-cvc"required>
    </div>
    </div>
    </div>
    </form>
    </div>
</div>
@endsection