@extends('layouts.main')
@section('title', 'Users')
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
                <td>
                    <form action="{{ route('destroy-usuario', ['usuario' => $usuario->id]) }}" method="post">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Delete">
                    </form>
                </td>
        @endforeach
    </table>
@endsection
