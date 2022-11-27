@extends('layouts.main')
@section('title', 'Insert user')
@section('content')
    <form action="{{ route('store-post') }}" method="post">
        @csrf
        <select name="usuario_id">
            @foreach($usuarios as $usuario)
                <option value="{{ $usuario->id }}">{{ $usuario->name }} {{ $usuario->surname }}</option>
            @endforeach
        </select><br><br>
        <input type="text" name="title" placeholder="Title"><br><br>
        <textarea  name="text" placeholder="Text"></textarea><br><br>
        <input type="submit" value="Save">
    </form>
@endsection
