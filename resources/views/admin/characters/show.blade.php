@extends('layouts.main')


@section('content')
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="{{ $character->image }}" class="img-fluid rounded-start" alt="{{ $character->name }}">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">{{ $character->name }}</h5>
                    <p class="card-text">{{ $character->background }}</p>
                    <div>
                        <h6>Statistiche:</h6>
                        <ul>
                            <li>
                                <strong>Armor class:</strong>{{ $character->armor_class }}
                            </li>
                            <li>
                                <strong>For:</strong>{{ $character->for }}
                                {{ $character->race?->mod_for >= 0 ? '+' . $character->race?->mod_for : $character->race?->mod_for }}
                            </li>
                            <li>
                                <strong>Des:</strong>{{ $character->des }}
                                {{ $character->race?->mod_des >= 0 ? '+' . $character->race?->mod_des : $character->race?->mod_des }}
                            </li>
                            <li>
                                <strong>Cos:</strong>{{ $character->cos }}
                                {{ $character->race?->mod_cos >= 0 ? '+' . $character->race?->mod_cos : $character->race?->mod_cos }}
                            </li>
                            <li>
                                <strong>Int:</strong>{{ $character->int }}
                                {{ $character->race?->mod_int >= 0 ? '+' . $character->race?->mod_int : $character->race?->mod_int }}
                            </li>
                            <li>
                                <strong>Sag:</strong>{{ $character->sag }}
                                {{ $character->race?->mod_sag >= 0 ? '+' . $character->race?->mod_sag : $character->race?->mod_sag }}
                            </li>
                            <li>
                                <strong>Car:</strong>{{ $character->car }}
                                {{ $character->race?->mod_car >= 0 ? '+' . $character->race?->mod_car : $character->race?->mod_car }}
                            </li>

                        </ul>
                    </div>
                    <div>
                        <h6>Razza:</h6>
                        <p>{{ $character->race?->name }}</p>
                        <p>{{ $character->race?->description }}</p>
                    </div>
                    <div>
                        <h6>Skills:</h6>
                        <ul>
                            @forelse ($character->skills as $skill)
                                <li>{{ $skill->name }} ( {{ $skill->skill }} )</li>

                            @empty
                                <span>-</span>
                            @endforelse
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('title')
    {{ $character->name }}
@endsection
