@extends('layouts.master')

@section('title', 'Search task')

@section('content')
    <div class="cont2">
        <section>           
            <h2>Search task</h2>
            <div class="content">
                <form action="{{ route('show-search') }}" method="post">
                    @csrf
                    @if($errors->any())
                        <span class="warning">
                            {{ implode('', $errors->all(':message')) }}
                        </span>
                    @endif
                    <input type="text" name="search" placeholder="Find a task!" value="{{ old('name') }}"  @if ($errors->has('search')) class="error" @endif>
                    <button class="button" type="submit" name="submit">Find</button>
                </form>
            </div>
        </section>
    </div>
@endsection
