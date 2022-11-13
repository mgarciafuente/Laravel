@extends('layouts.master')

@section('title', 'New car')

@section('content')
    <h1>New car</h1>
    <form action="{{ route('store') }}" method="post">
        @csrf
        @if($errors->has('plate')) {{ $errors->first('plate') }} @endif
        <input type="text" name="plate" value="{{ old('plate') }}">
        @if($errors->has('brand')) {{ $errors->first('brand') }} @endif
        <input type="text" name="brand" value="{{ old('brand') }}">
        @if($errors->has('model')) {{ $errors->first('model') }} @endif
        <input type="text" name="model" value="{{ old('model') }}">
        <button type="submit">Insert</button>
    </form>
@endsection