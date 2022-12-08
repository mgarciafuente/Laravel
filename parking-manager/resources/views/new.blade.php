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
                    <button class="button" type="submit" name="submit">Add</button>
                </form>
            </div>
        </section>
    </div>
@endsection
