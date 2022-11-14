@extends('layouts.master')

@section('title', 'Assign user')

@section('content')
    <div class="cont2">
        <section>           
            <h2>Assign user</h2>
            <div class="content">
                <form action="{{ route('store-assigment') }}" method="post">
                    @csrf
                    <select name="car">
                        @foreach($cars as $car)
                            <option value="{{ $car->id }}">{{ $car->plate }}</option>
                        @endforeach
                    </select>
                    <select name="user">
                        @foreach($users as $user)
                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                        @endforeach
                    </select>
                    <button class="button" type="submit" name="submit">Add</button>
                </form>
            </div>
        </section>
    </div>
@endsection
