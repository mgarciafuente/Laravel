@extends('layouts.master')

@section('title', 'New user')

@section('content')
    <div class="cont2">
        <section>           
            <h2>New user</h2>
            <div class="content">
                <form action="{{ route('store-user') }}" method="post">
                    @csrf
                    @if($errors->has('name'))
                        <span class="warning">{{ $errors->first('name') }}</span>
                    @endif
                    <input type="text" name="name" placeholder="Name" value="{{ old('name') }}"  @if ($errors->has('name')) class="error" @endif>
                    @if($errors->has('lastname'))
                        <span class="warning">{{ $errors->first('lastname') }}</span>
                    @endif
                    <input type="text" name="lastname" placeholder="Lastname" value="{{ old('lastname') }}"  @if ($errors->has('lastname')) class="error" @endif>
                    @if($errors->has('email'))
                        <span class="warning">{{ $errors->first('email') }}</span>
                    @endif
                    <input type="text" name="email" placeholder="Email" value="{{ old('email') }}"  @if ($errors->has('email')) class="error" @endif>
                    <button class="button" type="submit" name="submit">Add</button>
                </form>
            </div>
        </section>
    </div>
@endsection
