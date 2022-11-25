@extends('layouts.main')
@section('title', 'Insert user')
@section('content')
    <table>
        @foreach($usuarios as $usuario)
            <tr>
                <td>{{ $usuario->name }} {{ $usuario->surname }}</td>
                <td>
                    <form action="{{ route('edit-usuario', ['usuario' => $usuario->id]) }}" method="post">
                        @csrf
                        <input type="submit" value="Edit">
                    </form>
                </td>
        @endforeach
    </table>
@endsection
