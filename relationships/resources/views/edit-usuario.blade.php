@extends('layouts.main')
@section('title', 'Insert user')
@section('content')
    <form action="{{ route('update-usuario') }}" method="post">
        @csrf
        @method('put')
        <input type="text" name="name" value="{{ $usuario->name }}"><br><br>
        <input type="text" name="surname" value="{{ $usuario->surname }}"><br><br>
        <input type="submit" value="Save">
    </form>
@endsection
