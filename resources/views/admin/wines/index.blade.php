@extends('layouts/admin')

@section('content')
    <div class="container">
        <h1>Vini</h1>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Annata</th>
                    <th scope="col">Cantina</th>
                    <th scope="col">Colore</th>
                    <th scope="col">Tipologia</th>
                    <th scope="col">Gradazione</th>
                    <th scope="col">Estratto</th>
                    <th scope="col">Acidita</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($wines as $wine)
                    <tr>
                        <td>{{ ucwords($wine->nome) }}</td>
                        <td>{{ $wine->annata }}</td>
                        <td>{{ $wine->cantina }}</td>
                        <td>{{ ucwords($wine->colore) }}</td>
                        <td>{{ ucwords($wine->tipologia) }}</td>
                        <td>{{ $wine->gradazione }}</td>
                        <td>{{ $wine->estratto }}</td>
                        <td>{{ $wine->acidita }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
