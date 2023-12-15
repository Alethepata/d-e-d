@extends('layouts.main')


@section('content')
    <h1>{{ $title }}</h1>

    <form action='{{ $route }}' method="POST">
        @csrf
        @method($method)
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                value="{{ old('name', $character?->name) }}">
                @error('name')
                <p class="text-danger">{{ $message }}</p>
                @enderror
        </div>
        <div class="mb-3">
            <label for="height" class="form-label">Height</label>
            <input type="number" class="form-control @error('height') is-invalid @enderror" id="height" name="height" value="{{ old('height', $character?->height) }}">
            @error('height')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="weight" class="form-label">Weight</label>
            <input type="number" class="form-control @error('weight') is-invalid @enderror" id="weight" name="weight" value="{{ old('weight', $character?->weight) }}">
            @error('weight')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="background" class="form-label">Background</label>
            <input type="text" class="form-control @error('background') is-invalid @enderror" id="background" name="background" value="{{ old('background', $character?->background) }}">
            @error('background')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image Url</label>
            <input type="text" class="form-control" id="image" name="image" value="{{ old('image', $character?->image) }}">
        </div>
        <div class="mb-3">
            <label for="armor_class" class="form-label">Armor Class</label>
            <input type="number" class="form-control @error('armor_class') is-invalid @enderror" id="armor_class" name="armor_class" value="{{ old('armor_class', $character?->armor_class) }}">
            @error('armor_class')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="for" class="form-label">For</label>
            <input type="number" class="form-control @error('for') is-invalid @enderror" id="for" name="for" value="{{ old('for', $character?->for) }}">
            @error('for')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="des" class="form-label">Des</label>
            <input type="number" class="form-control @error('des') is-invalid @enderror" id="des" name="des" value="{{ old('des', $character?->des) }}">
            @error('des')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="cos" class="form-label">Cos</label>
            <input type="number" class="form-control @error('cos') is-invalid @enderror" id="cos" name="cos" value="{{ old('cos', $character?->cos) }}">
            @error('cos')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="int" class="form-label">Int</label>
            <input type="number" class="form-control @error('int') is-invalid @enderror" id="int" name="int" value="{{ old('int', $character?->int) }}">
            @error('int')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="sag" class="form-label">Sag</label>
            <input type="number" class="form-control @error('sag') is-invalid @enderror" id="sag" name="sag" value="{{ old('sag', $character?->sag) }}">
            @error('sag')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="car" class="form-label">Car</label>
            <input type="number" class="form-control @error('car') is-invalid @enderror" id="car" name="car" value="{{ old('car', $character?->car) }}">
            @error('car')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <select class="form-select mb-3" aria-label="Default select example">
            <option>Open this select menu</option>
            @foreach ($skills as $skill)
            <option value="{{ $skill->id }}"
                @if($skill->id == old('skill_id', $character->skill?->id)) selected
                @endif>{{ $skill->name }}</option>
            @endforeach
          </select>
        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="reset" class="btn btn-secondary">Retry</button>
    </form>
@endsection



@section('title')
    Create
@endsection
