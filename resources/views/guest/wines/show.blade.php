@extends('layouts/app')

@section('content')
    <div class="container">
        <h1>Vini</h1>

        <div class="row">
            <div class="col-4">
                <div class="card mb-3">
                    <div class="card-body d-flex flex-column justify-content-between">

                        <h5 class="card-title">{{ $wine->nome }}</h5>

                        <div class="card-text">
                            <ul>
                                <li><strong>Annata: </strong>{{ $wine->annata }}</li>
                                <li><strong>Cantina: </strong>{{ $wine->cantina }}</li>
                                <li><strong>Colore: </strong>{{ $wine->colore }}</li>
                                <li><strong>Tipologia: </strong>{{ $wine->tipologia }}</li>
                                <li><strong>Gradazione: </strong>{{ $wine->gradazione }}</li>
                                <li><strong>Estratto: </strong>{{ $wine->estratto }}</li>
                                <li><strong>Acidità: </strong>{{ $wine->acidita }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <a href="{{ route('guest.wines.index') }}">Torna alla lista</a>
    </div>
@endsection
