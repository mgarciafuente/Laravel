@extends('layouts.master')

@section('title', 'Home')

@section('content')
    <h1>Home</h1>
    @foreach($cars as $key => $car)
        <p>{{$car->plate}}, {{$car->brand}}, {{$car->model}}</p>
        @include('includes.delete')
    @endforeach
@endsection