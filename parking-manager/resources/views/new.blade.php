@extends('layouts.master')

@section('title', 'New parking')

@section('content')
    <div class="cont2">
        <section>           
            <h2>New parking</h2>
            <div class="content">
                <form action="{{ route('store') }}" method="post">
                    @csrf
                    @if($errors->any())
                        <span class="warning">
                            {{ implode('', $errors->all(':message')) }}
                        </span>
                    @endif
                    <input type="text" name="plate" placeholder="Plate" value="{{ old('plate') }}"  @if ($errors->has('plate')) class="error" @endif>
                    <input type="text" name="brand" placeholder="Brand" value="{{ old('brand') }}"  @if ($errors->has('brand')) class="error" @endif>
                    <input type="text" name="model" placeholder="Model" value="{{ old('brand') }}"  @if ($errors->has('model')) class="error" @endif>
                    <button class="button" type="submit" name="submit">Add</button>
                </form>
            </div>
        </section>
    </div>
@endsection
