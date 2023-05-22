@extends('layouts/admin')

@section('content')
    <h1>Vitigni</h1>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Descrizione</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($vines as $vine)
                <tr>
                    <td>{{ ucwords($vine->nome) }}</td>
                    <td>{{ $vine->descrizione }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
