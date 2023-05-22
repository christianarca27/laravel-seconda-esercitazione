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
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
