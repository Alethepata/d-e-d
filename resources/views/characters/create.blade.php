@extends('layouts.main')


@section('content')
    <h1>Create</h1>

    <form action='{{ route('characters.store') }}' method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="mb-3">
            <label for="height" class="form-label">Height</label>
            <input type="number" class="form-control" id="height" name="height">
        </div>
        <div class="mb-3">
            <label for="weight" class="form-label">Weight</label>
            <input type="number" class="form-control" id="weight" name="weight">
        </div>
        <div class="mb-3">
            <label for="background" class="form-label">Background</label>
            <input type="text" class="form-control" id="background" name="background">
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image Url</label>
            <input type="text" class="form-control" id="image" name="image">
        </div>
        <div class="mb-3">
            <label for="armor_class" class="form-label">Armor Class</label>
            <input type="number" class="form-control" id="armor_class" name="armor_class">
        </div>
        <div class="mb-3">
            <label for="for" class="form-label">For</label>
            <input type="number" class="form-control" id="for" name="for">
        </div>
        <div class="mb-3">
            <label for="des" class="form-label">Des</label>
            <input type="number" class="form-control" id="des" name="des">
        </div>
        <div class="mb-3">
            <label for="cos" class="form-label">Cos</label>
            <input type="number" class="form-control" id="cos" name="cos">
        </div>
        <div class="mb-3">
            <label for="int" class="form-label">Int</label>
            <input type="number" class="form-control" id="int" name="int">
        </div>
        <div class="mb-3">
            <label for="sag" class="form-label">Sag</label>
            <input type="number" class="form-control" id="sag" name="sag">
        </div>
        <div class="mb-3">
            <label for="car" class="form-label">Car</label>
            <input type="number" class="form-control" id="car" name="car">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="reset" class="btn btn-secondary">Retry</button>
    </form>
@endsection



@section('title')
    Create
@endsection
