@extends('layouts.main')
@section('title', 'Insert user')
@section('content')
    <form action="{{ route('store-usuario') }}" method="post">
        @csrf
        <input type="text" name="name" placeholder="Name"><br><br>
        <input type="text" name="surname" placeholder="Surname"><br><br>
        <input type="submit" value="Save">
    </form>
@endsection
