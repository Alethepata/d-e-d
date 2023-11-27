@extends('layouts.main')


@section('content')
<h1>D & D Lista</h1>

<div class="container-card d-flex flex-wrap justify-content-center gap-3">
    @foreach ($characters as $character )
    <div class="card" style="width: 18rem;">
        <img src="{{$character->image}}" class="card-img-top" alt="{{$character->name}}">
        <div class="card-body">
          <h5 class="card-title">{{$character->name}}</h5>
          <a href="{{route('characters.show', $character)}}" class="btn btn-primary"><i class="fa-solid fa-eye"></i></a>
        </div>
      </div>
    @endforeach

</div>

@endsection

@section('title')
    Lista
@endsection
