@extends('layouts.app')

@section('title', 'Lista de Billetes')

@section('content')
    <h1 class="mb-4 text-center">Billetes del Mundo</h1>

    <div id="billetesCarousel" class="carousel slide mb-5" data-bs-ride="carousel">
        <div class="carousel-inner">
            @foreach($billetes->take(3) as $key => $billete) {{-- Mostrar los primeros 3 billetes en el slider --}}
                <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                    <img src="{{ asset($billete->imagen) }}" class="d-block w-100" alt="{{ $billete->nombre }}">
                    <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-75 p-2 rounded">
                        <h5>{{ $billete->nombre }} ({{ $billete->pais }})</h5>
                        <p>{{ $billete->denominacion }} {{ $billete->nombre }}</p>
                    </div>
                </div>
            @endforeach
        </div>
        <button class="carousel-control-prev control-btn" type="button" data-bs-target="#billetesCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next control-btn" type="button" data-bs-target="#billetesCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon " aria-hidden="true"></span>
            <span class="visually-hidden">Siguiente</span>
        </button>
    </div>

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
        @foreach ($billetes as $billete)
            <div class="col">
                <div class="card h-100">
                    <img src="{{ asset($billete->imagen) }}" class="card-img-top" alt="{{ $billete->nombre }}">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">{{ $billete->nombre }}</h5>
                        <p class="card-text">
                            <small class="text-muted">País: {{ $billete->pais }}</small><br>
                            <small class="text-muted">Denominación: {{ $billete->denominacion }}</small>
                        </p>
                        <div class="mt-auto">
                            <a href="{{ route('billetes.show', $billete->id) }}" class="btn btn-primary btn-sm w-100">Ver Detalle</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection