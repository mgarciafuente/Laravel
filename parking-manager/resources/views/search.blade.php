@extends('layouts.master')

@section('title', 'Search parking')

@section('content')
    <div class="cont2">
        <section>           
            <h2>Search parking</h2>
            <div class="content">
                <form action="{{ route('show-search') }}" method="post">
                    @csrf
                    <input type="text" name="search" placeholder="Find a parking!" value="{{ old('name') }}"  @error('search') class="error" @enderror>
                    <input type="date" name="date" placeholder="Select a date...">
                    <select name="user">
                        <option disabled selected>Select a user</option>
                        @foreach($users as $user)
                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                        @endforeach
                    </select>
                    <button class="button" type="submit" name="submit">Find</button>
                </form>
            </div>
        </section>
    </div>
@endsection
