@extends('layouts.app')
@section('content')
    <div class="container">
    <?php
    foreach ($users as $user) {
    echo $user->name;
}
?>
    </div>
@endsection