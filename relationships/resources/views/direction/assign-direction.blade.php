@extends('layouts.main')
@section('title', 'Insert direction')
@section('content')
    <form action="{{ route('store-direction-assigment') }}" method="post">
        @csrf
        @method('put')
        <select name="usuario_id">
            @foreach($usuarios as $usuario)
                <option value="{{ $usuario->id }}">{{ $usuario->name }}</option>
            @endforeach
        </select>
        <select name="direction_id">
            @foreach($directions as $direction)
                <option value="{{ $direction->id }}">{{ $direction->street }} {{ $direction->number }} {{ $direction->postal_code }} {{ $direction->city }}</option>
            @endforeach
        </select>
        <input type="submit" value="Save">
    </form>
@endsection