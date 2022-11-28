@extends('layouts.main')
@section('title', 'Insert tema')
@section('content')
    <form action="{{ route('store-tema') }}" method="post">
        @csrf
        <input type="text" name="name" placeholder="Tema"><br><br>
        <input type="submit" value="Save">
    </form>
@endsection
