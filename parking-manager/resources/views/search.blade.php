@extends('layouts.master')

@section('title', 'Search parking')

@section('content')
    <div class="cont2">
        <section>           
            <h2>Search parking</h2>
            <div class="content">
                <form action="{{ route('show-search') }}" method="post">
                    @csrf
                    @if($errors->has('search'))
                        <span class="warning">{{ $errors->first('search') }} </span>
                    @endif
                    <input type="text" name="search" placeholder="Find a parking!" value="{{ old('name') }}"  @if ($errors->has('search')) class="error" @endif>
                    <button class="button" type="submit" name="submit">Find</button>
                </form>
            </div>
        </section>
    </div>
@endsection
