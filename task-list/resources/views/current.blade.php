@extends('layouts.master')

@section('title', 'Current tasks')

@section('content')
    <div class="cont2">
        <section>           
            <h2>Current tasks</h2>
            <div class="current-tasks">
                <table>
                    @foreach($tasks as $task)
                        <tr>
                            <td>{{ $task->name }}</td>
                            <td><a href="{{ route('destroy', ['id' => $task->id]) }}" class="delete">Delete</a></td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </section>
    </div>
@endsection
