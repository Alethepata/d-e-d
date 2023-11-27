@extends('layouts.main')


@section('content')


<div class="card mb-3" style="max-width: 540px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="{{$character->image}}" class="img-fluid rounded-start" alt="{{$character->name}}">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">{{$character->name}}</h5>
          <p class="card-text">{{$character->background}}</p>
          <div>
            <h6>Statistiche:</h6>
            <ul>
                <li>
                    <strong>Armor class:</strong>{{$character->armor_class}}
                </li>
                <li>
                    <strong>For:</strong>{{$character->for}}
                </li>
                <li>
                    <strong>Des:</strong>{{$character->des}}
                </li>
                <li>
                    <strong>Cos:</strong>{{$character->cos}}
                </li>
                <li>
                    <strong>Int:</strong>{{$character->int}}
                </li>
                <li>
                    <strong>Sag:</strong>{{$character->sag}}
                </li>
                <li>
                    <strong>Car:</strong>{{$character->car}}
                </li>

            </ul>
        </div>
        </div>
      </div>
    </div>
  </div>

@endsection

@section('title')
 {{$character->name}}
@endsection
