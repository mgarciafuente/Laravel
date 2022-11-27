@extends('layouts.main')
@section('title', 'Insert user')
@section('content')
    <form action="{{ route('update-usuario', ['usuario' => $usuario->id]) }}" method="post">
        @csrf
        @method('patch')
        <input type="text" name="name" value="{{ $usuario->name }}"><br><br>
        <input type="text" name="surname" value="{{ $usuario->surname }}"><br><br>
        <input type="submit" value="Save">
    </form>
@endsection
