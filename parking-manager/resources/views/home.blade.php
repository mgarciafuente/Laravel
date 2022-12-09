@extends('layouts.master')

@section('title', 'Parking manager')

@section('content')
    <div class="cont2">
        <section>
            <ul class="content">
                <li><a class="button" href="{{ route('new') }}">New parking</a></li>
                <li><a class="button" href="{{ route('current') }}">Current parkings</a></li>
                <li><a class="button" href="{{ route('search') }}">Search parking</a></li>
                <li><a class="button" href="{{ route('new-user') }}">New user</a></li>
                <!-- <li><a class="button" href="{{ route('assign-user') }}">Assign user</a></li> -->
            </ul>
        </section>
    </div>
@endsection
