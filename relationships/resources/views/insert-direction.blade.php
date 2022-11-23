@extends('layouts.main')
@section('title', 'Insert direction')
@section('content')
    <form action="{{ route('store-direction') }}" method="post">
        @csrf
        <input type="text" name="street" placeholder="street"><br><br>
        <input type="number" name="number" placeholder="number"><br><br>
        <input type="number" name="postal_code" placeholder="postal_code"><br><br>
        <input type="text" name="city" placeholder="city"><br><br>
        <input type="submit" value="Save">
    </form>
@endsection