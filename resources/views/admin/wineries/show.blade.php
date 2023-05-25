@extends('layouts/admin')

@section('content')
    <h1 class="card-title mb-3">Dettagli Cantina</h1>

    <div class="card">
        <div class="card-body">
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><strong>Nome:</strong> {{ ucwords($winery->nome) }}</li>
                <li class="list-group-item"><strong>Indirizzo:</strong> {{ $winery->indirizzo }}</li>
                <li class="list-group-item"><strong>Comune:</strong> {{ $winery->comune }}</li>
                <li class="list-group-item"><strong>Provincia:</strong> {{ ucwords($winery->provincia) }}</li>
                <li class="list-group-item"><strong>Regione:</strong> {{ ucwords($winery->regione) }}</li>
                <li class="list-group-item"><strong>Nazione:</strong> {{ $winery->nazione }}</li>
                <li class="list-group-item"><strong>Telefono:</strong> {{ $winery->telefono }}</li>
                <li class="list-group-item"><strong>Email:</strong> {{ $winery->email }}</li>
                <li class="list-group-item">
                    <a href="{{ route('admin.wineries.show', $winery) }}" class="btn btn-primary">Apri</a>
                </li>
            </ul>
        </div>
    </div>
@endsection
