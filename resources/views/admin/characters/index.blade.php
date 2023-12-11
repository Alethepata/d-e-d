@extends('layouts.main')


@section('content')
    <h1>D & D Lista</h1>

    <div class="container-card d-flex flex-wrap justify-content-center gap-3">
        @foreach ($characters as $character)
            <div class="card" style="width: 18rem;">
                <img src="{{ $character->image }}" class="card-img-top" alt="{{ $character->name }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $character->name }}</h5>
                    <a href="{{ route('admin.characters.show', $character) }}" class="btn btn-primary"><i
                            class="fa-solid fa-eye"></i></a>
                    <a href="{{ route('admin.characters.edit', $character) }}" class="btn btn-warning"><i
                            class="fa-solid fa-pencil"></i></a>
                    <form class="d-inline-block" action="{{ route('admin.characters.destroy', $character) }}" method="POST"
                        onsubmit="return confirm('Are you sure you want to delete {{ $character->name }}?')">
                        @csrf
                        @method('DELETE')
                        <button type="sumbit" class="btn btn-danger btn-custom"><i class="fa-solid fa-trash"></i></button>
                    </form>

                </div>
            </div>
        @endforeach

    </div>
@endsection

@section('title')
    Lista
@endsection
