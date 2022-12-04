@extends('layouts.main')
@section('title', 'Insert user')
@section('content')
    <form action="{{ route('store-post') }}" method="post">
        @csrf
        @methos('put')
        <p>{{ $post->usuario->name }}</p><br><br>
        <input type="text" name="title" placeholder="Title" value="{{ $post->title }}"><br><br>
        <textarea  name="text" placeholder="Text">{{ $post->text }}</textarea><br><br>
        @foreach($temas as $tema)
            <label>
                <input type="checkbox" name="temas[]" value="{{ $tema->id }}" @if($post->temas()->where('tema_id', $tema->id)->exists()) {{ "checked" }} @endif>
                {{ $tema->name }}
            </label><br><br>
        @endforeach
        <input type="submit" value="Save">
    </form>
@endsection
