@extends('layouts.master')

@section('title', 'Search')

@section('content')
    <h1>Search</h1>
    <form action="{{ route('show') }}" method="post">
        @csrf
        @if($errors->has('search')) {{ $errors->first('search') }} @endif
        <input type="text" name="search" value="{{ old('search') }}">
        <button type="submit">Insert</button>
    </form>
@endsection