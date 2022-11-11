@extends('layouts.master')

@section('title', 'Parking manager')

@section('content')
    <div class="cont2">
        <section>
            <ul class="content">
                <li><a class="button" href="{{ route('new') }}" @if($view_name == 'new') class="disabled" @endif>New parking</a></li>
                <li><a class="button" href="{{ route('current') }}"  @if($view_name == 'current') class="disabled" @endif>Current parkings</a></li>
                <li><a class="button" href="{{ route('search') }}"  @if($view_name == 'search') class="disabled" @endif>Search parking</a></li>
            </ul>
        </section>
    </div>
@endsection
