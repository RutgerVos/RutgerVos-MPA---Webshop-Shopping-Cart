@extends('layouts.app')
@section('title')
Checkout
@endsection
@section('content')
<p>Checkout done</p>
<a type="button" href="{{ route('user.profile') }}" class='btn btn-info'value="">profile</a>
@endsection