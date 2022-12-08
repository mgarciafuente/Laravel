@extends('layouts.master')

@section('title', 'New user')

@section('content')
    <div class="cont2">
        <section>           
            <h2>New user</h2>
            <div class="content">
                <form action="{{ route('store-user') }}" method="post">
                    @csrf
                    @error('name') <span class="warning">{{ $message }}</span>@enderror
                    <input type="text" name="name" placeholder="Name" value="{{ old('name') }}"  @error('name') class="error" @enderror>
                    @error('lastname')<span class="warning">{{ $message }}</span>@enderror
                    <input type="text" name="lastname" placeholder="Lastname" value="{{ old('lastname') }}"  @error('lastname') class="error" @enderror>
                    @error('email')<span class="warning">{{ $message }}</span>@enderror
                    <input type="text" name="email" placeholder="Email" value="{{ old('email') }}"  @error('email') class="error" @enderror>
                    <button class="button" type="submit" name="submit">Add</button>
                </form>
            </div>
        </section>
    </div>
@endsection
