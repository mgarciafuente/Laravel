@extends('layouts.master')

@section('title', 'New parking')

@section('content')
    <div class="cont2">
        <section>           
            <h2>New parking</h2>
            <div class="content">
                <form action="{{ route('store') }}" method="post">
                    @csrf
                    @error('plate')<span class="warning">{{ $message }}</span>@enderror
                    <input type="text" name="plate" placeholder="Plate" value="{{ old('plate') }}" @error('plate') class="error" @enderror>
                    @error('brand')<span class="warning">{{ $message }}</span>@enderror
                    <input type="text" name="brand" placeholder="Brand" value="{{ old('brand') }}" @error('brand') class="error" @enderror>
                    @error('model')<span class="warning">{{ $message }}</span>@enderror
                    <input type="text" name="model" placeholder="Model" value="{{ old('model') }}" @error('model') class="error" @enderror>

                    <span class="separator"></span>

                    <div id="old-users" @if($errors->has('name') || $errors->has('lastname') || $errors->has('email')) class="d-none" @endif>
                        @error('user')<span class="warning">{{ $message }}</span>@enderror
                        <select name="user" @error('user') class="error" @enderror>
                            <option disabled selected value="0">Select a user</option>
                            @foreach($users as $user)
                                <option value="{{ $user->id }}" {{ old('user') == $user->id ? "selected" : "" }}>{{ $user->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <button id="button2" type="button" @if($errors->has('name') || $errors->has('lastname') || $errors->has('email')) class="d-none" @endif>New user</button>

                    <div id="new-user" @if($errors->has('name') || $errors->has('lastname') || $errors->has('email')) class="d-block" @endif>
                        @error('name') <span class="warning">{{ $message }}</span>@enderror
                        <input type="text" name="name" placeholder="Name" value="{{ old('name') }}"  @error('name') class="error" @enderror>
                        @error('lastname')<span class="warning">{{ $message }}</span>@enderror
                        <input type="text" name="lastname" placeholder="Lastname" value="{{ old('lastname') }}"  @error('lastname') class="error" @enderror>
                        @error('email')<span class="warning">{{ $message }}</span>@enderror
                        <input type="text" name="email" placeholder="Email" value="{{ old('email') }}"  @error('email') class="error" @enderror>
                    </div>

                    <button class="button" type="submit" name="submit">Add</button>
                </form>
            </div>
        </section>
    </div>
@endsection
