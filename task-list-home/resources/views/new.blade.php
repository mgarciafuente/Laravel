@extends('layouts.master')

@section('title', 'New task')

@section('content')
    <div class="cont2">
        <section>           
            <h2>New task</h2>
            <div class="current-tasks">
                <form action="{{ route('store') }}" method="post">
                    @csrf
                    @if($errors->any())
                        <span class="warning">
                            {{ implode('', $errors->all(':message')) }}
                        </span>
                    @endif
                    <input type="text" name="name" placeholder="Write a new task!" value="{{ old('name') }}"  @if ($errors->has('name')) class="error" @endif>
                    <button class="button" type="submit" name="submit">Add</button>
                </form>
            </div>
        </section>
    </div>
@endsection
