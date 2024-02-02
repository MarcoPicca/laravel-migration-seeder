@extends('trains')

@section('main-content')

            <ul class="d-flex flex-wrap justify-content-center">
                @foreach ($trains as $train)
                <div class="card m-2 col-3" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $train->azienda }}</h5>
                        <p class="card-text">{{ $train->stazione_di_partenza }} - {{ $train->stazione_di_arrivo }}</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Orario di partenza - orario di arrivo: {{ $train->orario_di_partenza }} - {{ $train->orario_di_arrivo }}</li>
                        <li class="list-group-item">Codice treno: {{ $train->codice_treno }}</li>
                        <li class="list-group-item">Numero carrozze: {{ $train->numero_carrozze }}</li>
                    </ul>
                    <div class="card-body">
                        <p class="card-text">In orario: {{ $train->in_orario }}</p>
                        <p class="card-text">Cancellato: {{ $train->cancellato }}</p>
                    </div>
                </div>
                @endforeach
            </ul>

@endsection