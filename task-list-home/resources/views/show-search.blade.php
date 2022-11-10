@extends('layouts.master')

@section('title', 'Search results')

@section('content')
    <div class="cont2">
        <section>           
            <h2>Search results</h2>
            <div class="content">
                <table>
                    @forelse($tasks as $task)
                        <tr>
                            <td>{{ $task->name }}</td>
                            <td><a href="{{ route('destroy', ['id' => $task->id]) }}" class="delete">Delete</a></td>
                        </tr>
                    @empty
                        <tr><td class="red">No results found</td><td></td></tr>
                    @endforelse
                </table>
            </div>
        </section>
    </div>
@endsection
