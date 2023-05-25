@extends('layouts/admin')

@section('content')
    <div class="container py-3 __create-ctn text-white">
        <h1>Inserisci una cantina</h1>

        <form action="{{ route('admin.wines.store') }}" method="POST" class="py-5">
            @csrf

            <div class="mb-3">
                <label for="nome">Nome</label>
                <input class="form-control @error('nome') is-invalid @enderror" type="text" name="nome" id="nome"
                    value="{{ old('nome') }}">
                @error('nome')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="indirizzo">Indirizzo</label>
                <input class="form-control @error('indirizzo') is-invalid @enderror" type="text" name="indirizzo"
                    id="indirizzo" value="{{ old('indirizzo') }}">
                @error('indirizzo')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="comune">Comune</label>
                <input class="form-control @error('comune') is-invalid @enderror" type="text" name="comune"
                    id="comune" value="{{ old('comune') }}">
                @error('comune')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="provincia">Provincia</label>
                <input class="form-control @error('provincia') is-invalid @enderror" type="text" name="provincia"
                    id="provincia" value="{{ old('provincia') }}">
                @error('provincia')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="regione">Regione</label>
                <input class="form-control @error('regione') is-invalid @enderror" type="text" name="regione"
                    id="regione" value="{{ old('regione') }}">
                @error('regione')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="nazione">Nazione</label>
                <input class="form-control @error('nazione') is-invalid @enderror" type="text" name="nazione"
                    id="nazione" value="{{ old('nazione') }}">
                @error('nazione')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="telefono">Telefono</label>
                <input class="form-control @error('telefono') is-invalid @enderror" type="text" name="telefono"
                    id="telefono" value="{{ old('telefono') }}">
                @error('telefono')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="email">Email</label>
                <input class="form-control @error('email') is-invalid @enderror" type="email" name="email"
                    id="email" value="{{ old('email') }}">
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Aggiungi cantina</button>

        </form>


    </div>
@endsection
