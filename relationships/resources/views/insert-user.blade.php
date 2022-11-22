@extends('layouts.main')
@section('title', 'Insert user')
@section('content')
    <form action="{{ route('store-usuario') }}" method="post">
        @csrf
        @method('put')
        <input type="text" name="name" placeholder="name"><br><br>
        <input type="text" name="surname" placeholder="surname"><br><br>
        <input type="submit" value="Save">
    </form>
@endsection
