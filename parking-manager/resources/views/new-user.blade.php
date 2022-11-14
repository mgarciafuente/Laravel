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
                    @if($errors->has('dni'))
                        <span class="warning">{{ $errors->first('dni') }}</span>
                    @endif
                    <input type="text" name="dni" placeholder="DNI" value="{{ old('dni') }}"  @if ($errors->has('dni')) class="error" @endif>
                    <button class="button" type="submit" name="submit">Add</button>
                </form>
            </div>
        </section>
    </div>
@endsection
