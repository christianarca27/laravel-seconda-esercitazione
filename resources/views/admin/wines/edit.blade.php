@extends('layouts/admin')

@section('content')
    <div class="container py-3 __create-ctn text-white">
        <h1>Modifica vino</h1>

        <form action="{{ route('admin.wines.update', $wine) }}" method="POST" class="py-5">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="nome">Nome</label>
                <input class="form-control @error('nome') is-invalid @enderror" type="text" name="nome" id="nome"
                    value="{{ old('nome') ?? $wine->nome }}">
                @error('nome')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="annata">Annata</label>
                <input class="form-control @error('annata') is-invalid @enderror" type="number" name="annata"
                    id="annata" value="{{ old('annata') ?? $wine->annata }}">
                @error('annata')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="cantina_id">Cantina</label>
                <select class="form-select @error('cantina_id') is-invalid @enderror" id="cantina_id" name="cantina_id"
                    required>
                    <option value="" selected>Nessuno</option>

                    @foreach ($wineries as $winery)
                        <option value="{{ $winery->id }}"
                            {{ $winery->id == old('cantina_id', $wine->winery?->id) ? 'selected' : '' }}>
                            {{ $winery->nome }}</option>
                    @endforeach
                </select>

                @error('cantina_id')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="colore">Colore</label>
                <input class="form-control @error('colore') is-invalid @enderror" type="text" name="colore"
                    id="colore" value="{{ old('colore') ?? $wine->colore }}">
                @error('colore')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="tipologia">Tipologia</label>
                <input class="form-control @error('tipologia') is-invalid @enderror" type="text" name="tipologia"
                    id="tipologia" value="{{ old('tipologia') ?? $wine->tipologia }}">
                @error('tipologia')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="gradazione">Gradazione</label>
                <input class="form-control @error('gradazione') is-invalid @enderror" type="number" step="0.1"
                    name="gradazione" id="gradazione" value="{{ old('gradazione') ?? $wine->gradazione }}">
                @error('gradazione')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="estratto">Estratto</label>
                <input class="form-control @error('estratto') is-invalid @enderror" type="number" step="0.1"
                    name="estratto" id="estratto" value="{{ old('estratto') ?? $wine->estratto }}">
                @error('estratto')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="acidita">Acidit&agrave;</label>
                <input class="form-control @error('acidita') is-invalid @enderror" type="number" step="0.1"
                    name="acidita" id="acidita" value="{{ old('acidita') ?? $wine->acidita }}">
                @error('acidita')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Modifica vino</button>

        </form>


    </div>
@endsection
