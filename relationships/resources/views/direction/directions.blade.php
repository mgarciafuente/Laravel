@extends('layouts.main')
@section('title', 'Directions')
@section('content')
    <table>
        @foreach($directions as $direction)
            <tr>
                <td>{{ $direction->street }} {{ $direction->number }} {{ $direction->postal_code }} {{ $direction->city }}</td>
                <td>
                    <form action="{{ route('edit-direction', ['direction' => $direction->id]) }}" method="post">
                        @csrf
                        <input type="submit" value="Edit">
                    </form>
                </td>
                <td>
                    <form action="{{ route('destroy-direction', ['direction' => $direction->id]) }}" method="post">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Delete">
                    </form>
                </td>
        @endforeach
    </table>
@endsection
