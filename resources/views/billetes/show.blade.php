@extends('layouts.app')

@section('title', 'Detalle de ' . $billete->nombre)

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('billetes.index') }}">Lista de Billetes</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $billete->nombre }}</li>
        </ol>
    </nav>

    <div class="card mb-4">
        <div class="row g-0">
            <div class="col-md-5">
                <img src="{{ asset($billete->imagen) }}" class="img-fluid rounded-start w-100" alt="{{ $billete->nombre }}" style="object-fit: contain; height: 100%;">
            </div>
            <div class="col-md-7">
                <div class="card-body">
                    <h1 class="card-title">{{ $billete->nombre }}</h1>
                    <p class="card-text"><strong>País:</strong> {{ $billete->pais }}</p>
                    <p class="card-text"><strong>Denominación:</strong> {{ $billete->denominacion }}</p>
                    <p class="card-text"><strong>Año de Emisión:</strong> {{ $billete->anho_emision }}</p>
                    <p class="card-text"><strong>Material:</strong> {{ $billete->material }}</p>
                    <p class="card-text"><strong>Descripción:</strong> {{ $billete->descripcion }}</p>
                    <a href="{{ route('billetes.index') }}" class="btn btn-secondary mt-3">Volver a la Lista</a>
                </div>
            </div>
        </div>
    </div>
@endsection