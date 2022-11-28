@extends('layouts.main')
@section('title', 'Edit direction')
@section('content')
    <form action="{{ route('update-direction', ['direction' => $direction->id]) }}" method="post">
        @csrf
        @method('put')
        <input type="text" name="street" value="{{ $direction->street }}"><br><br>
        <input type="number" name="number" value="{{ $direction->number }}"><br><br>
        <input type="number" name="postal_code" value="{{ $direction->postal_code }}"><br><br>
        <input type="text" name="city" value="{{ $direction->city }}"><br><br>
        <input type="submit" value="Save">
    </form>
@endsection