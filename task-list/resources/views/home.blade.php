@extends('layouts.master')

@section('title', 'Task List')

@section('content')
    <div class="cont2">
        <ul class="homeul">
            <li><a class="button" href="{{ route('new') }}" @if($view_name == 'new') class="disabled" @endif>New task</a></li>
            <li><a class="button" href="{{ route('current') }}"  @if($view_name == 'current') class="disabled" @endif>Current tasks</a></li>
            <li><a class="button" href="{{ route('search') }}"  @if($view_name == 'search') class="disabled" @endif>Search task</a></li>
        </ul>
    </div>
@endsection
