@extends('layouts.master')

@section('title', 'Current parkings')

@section('content')
    <div class="cont2">
        <section>           
            <h2>Current parkings</h2>
            <div class="content">
                <table>
                    @if($parkings->isNotEmpty())
                        <tr>
                            <th>Plate</th>
                            <th>Brand</th>
                            <th>Model</th>
                            <th>User</th>
                            <th></th>
                        </tr>
                    @endif
                    @forelse($parkings as $parking)
                        <tr>
                            <td>{{ $parking->plate }}</td>
                            <td>{{ $parking->brand }}</td>
                            <td>{{ $parking->model }}</td>
                            <td>
                                @foreach($users as $user)
                                    @if((string)$user->id == (string)$parking->userId)
                                        {{ $user->name }}
                                    @endif
                                @endforeach
                            </td>
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
