@extends('layouts/admin')

@section('content')
    <div class="container">
        <h1>Dettagli vino</h1>

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
                    <th scope="col">Vitigni</th>
                    <th scope="col">Azioni</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ ucwords($wine->nome) }}</td>
                    <td>{{ $wine->annata }}</td>
                    <td>{{ $wine->winery->nome ?? 'Nessuna' }}</td>
                    <td>{{ ucwords($wine->colore) }}</td>
                    <td>{{ ucwords($wine->tipologia) }}</td>
                    <td>{{ $wine->gradazione }}</td>
                    <td>{{ $wine->estratto }}</td>
                    <td>{{ $wine->acidita }}</td>
                    <td>
                        @foreach ($wine->vines as $vine)
                            {{ $vine->nome }}
                        @endforeach
                    </td>
                    <td>
                        <a class="btn btn-primary mb-2" href="{{ route('admin.wines.edit', $wine) }}">Modifica</a>

                        <form action="{{ route('admin.wines.destroy', $wine) }}" method="post">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger">Elimina</button>
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>

        <a href="{{ route('admin.wines.index') }}">Torna alla lista vini</a>
    </div>
@endsection
