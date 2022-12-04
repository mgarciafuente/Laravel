@extends('layouts.main')
@section('title', 'Posts')
@section('content')
    <table>
        @foreach($posts as $post)
            <tr>
                <td>{{ $post->title }} {{ $post->text }} ({{ $post->usuario->name }} {{ $post->usuario->surname }})</td>
                <td>
                    <form action="{{ route('edit-post', ['post' => $post->id]) }}" method="post">
                        @csrf
                        <input type="submit" value="Edit">
                    </form>
                </td>
                <td>
                    <form action="{{ route('destroy-post', ['post' => $post->id]) }}" method="post">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Delete">
                    </form>
                </td>
        @endforeach
    </table>
@endsection
