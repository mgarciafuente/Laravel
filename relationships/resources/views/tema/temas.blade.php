@extends('layouts.main')
@section('title', 'Temas')
@section('content')
    <table>
        @foreach($temas as $tema)
            <tr>
                <td>{{ $tema->name }}</td>
                <td>
                    <form action="{{ route('destroy-tema', ['tema' => $tema->id]) }}" method="post">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Delete">
                    </form>
                </td>
        @endforeach
    </table>
@endsection
