@extends('layouts.master')

@section('title', 'Search results')

@section('content')
    <div class="cont2">
        <section>           
            <h2>Search results</h2>
            <div class="content">
                <table>
                    @forelse($parkings as $parking)
                        <tr>
                            <td>{{ $parking->plate }}</td>
                            <td>{{ $parking->brand }}</td>
                            <td>{{ $parking->model }}</td>
                            <td>@include('includes/delete', ['text' => 'Delete'])</td>
                        </tr>
                    @empty
                        <tr><td class="red">No results found</td><td></td></tr>
                    @endforelse
                </table>
            </div>
        </section>
    </div>
@endsection
