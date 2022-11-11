@extends('layouts.master')

@section('title', 'Current parkings')

@section('content')
    <div class="cont2">
        <section>           
            <h2>Current parkings</h2>
            <div class="content">
                <table>
                    @foreach($parkings as $parking)
                        <tr>
                            <td>{{ $parking->plate }}</td>
                            <td>{{ $parking->brand }}</td>
                            <td>{{ $parking->model }}</td>
                            <td>@include('includes/delete', ['text' => 'Delete'])</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </section>
    </div>
@endsection
