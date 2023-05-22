@extends('layouts.admin')

@section('content')
    <a href="{{ route('admin.wines.index') }}">Visualizza lista vini</a>
    <a href="{{ route('admin.wineries.index') }}">Visualizza lista enoteche</a>
    <a href="{{ route('admin.vines.index') }}">Visualizza lista vitigni</a>
@endsection
