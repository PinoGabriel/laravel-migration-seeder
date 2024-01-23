@extends('layouts.app')

@section('content')
    <div class="container pt-5">
        <h1 class="text-center">Tutti i Treni</h1>
        <div class="row">
            @foreach ($trains as $train)
                <div class="card m-3">
                    <div class="card-body">
                        <h5 class="card-title">Azienda: {{ $train->Azienda }}</h5>
                        <p class="card-text">Stazione di Partenza: {{ $train->Stazione_di_partenza }}</p>
                        <p class="card-text">Stazione di Arrivo: {{ $train->Stazione_di_arrivo }}</p>
                        <p class="card-text">Oaririo di Partenza: {{ $train->Orario_di_partenza }}</p>
                        <p class="card-text">Oaririo di Arrivo: {{ $train->Orario_di_arrivo }}</p>
                        <p class="card-text">Codice Treno: {{ $train->Codice_Treno }}</p>
                        <p class="card-text">N. Carrozze: {{ $train->Numero_Carrozze }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
