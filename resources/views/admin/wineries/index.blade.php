@extends('layouts/admin')

@section('content')
    <h1>Cantine</h1>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Indirizzo</th>
                <th scope="col">Comune</th>
                <th scope="col">Provincia</th>
                <th scope="col">Regione</th>
                <th scope="col">Nazione</th>
                <th scope="col">Telefono</th>
                <th scope="col">Email</th>
                <th scope="col">Azioni</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($wineries as $winery)
                <tr>
                    <td>{{ ucwords($winery->nome) }}</td>
                    <td>{{ $winery->indirizzo }}</td>
                    <td>{{ $winery->comune }}</td>
                    <td>{{ ucwords($winery->provincia) }}</td>
                    <td>{{ ucwords($winery->regione) }}</td>
                    <td>{{ $winery->nazione }}</td>
                    <td>{{ $winery->telefono }}</td>
                    <td>{{ $winery->email }}</td>
                    <td><a href="{{ route('admin.wineries.show', $winery) }}">Apri</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('admin.wineries.create') }}" class="btn btn-primary">Inserisci nuova cantina</a>
@endsection
