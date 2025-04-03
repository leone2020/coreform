@extends('layouts.app')

@section('title', $certificazione['titolo'] . ' - Coreform')

@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col-md-6">
            <div class="mb-4">
                <h1 class="display-5 fw-bold text-primary">{{ $certificazione['titolo'] }}</h1>
                <div class="bg-primary text-white p-3 my-4">
                    <h5>{{ $certificazione['sottotitolo'] }}</h5>
                </div>
                
                <div class="mt-5">
                    <h5>RICONOSCIUTA DA</h5>
                    <img src="{{ $certificazione['logo_riconoscimento'] }}" alt="Logo Riconoscimento" class="img-fluid mt-2" style="max-height: 80px;">
                </div>
            </div>
        </div>
        
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-header bg-light">
                    <div class="d-flex align-items-center">
                        <img src="{{ asset('images/certificazioni/logo-coreform.png') }}" alt="Logo Coreform" class="rounded-circle me-3" style="width: 50px;">
                        <div>
                            <h5 class="mb-0">Coreform</h5>
                            <div class="text-warning">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="text-dark ms-2">5.0</span>
                            </div>
                            <small class="text-muted">941 recensioni</small>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <h6 class="text-uppercase text-muted">COREFORM SRL</h6>
                    <h2 class="card-title mb-4">{{ $certificazione['titolo_completo'] }}</h2>
                    
                    <p class="card-text">{{ $certificazione['descrizione_breve'] }}</p>
                    
                    <div class="mt-4">
                        <h5>Scegli il livello:</h5>
                        
                        <!-- Livello B2 -->
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h5 class="mb-1">{{ $certificazione['livelli']['b2']['nome'] }}</h5>
                                        <p class="mb-0 text-muted">{{ $certificazione['livelli']['b2']['descrizione'] }}</p>
                                    </div>
                                    <div class="text-end">
                                        <div class="fw-bold">&euro; {{ number_format($certificazione['livelli']['b2']['prezzo'], 2, ',', '.') }}</div>
                                        <button class="btn btn-sm btn-primary mt-2">Acquista</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Livello C1 -->
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h5 class="mb-1">{{ $certificazione['livelli']['c1']['nome'] }}</h5>
                                        <p class="mb-0 text-muted">{{ $certificazione['livelli']['c1']['descrizione'] }}</p>
                                    </div>
                                    <div class="text-end">
                                        <div class="fw-bold">&euro; {{ number_format($certificazione['livelli']['c1']['prezzo'], 2, ',', '.') }}</div>
                                        <button class="btn btn-sm btn-primary mt-2">Acquista</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Livello C2 -->
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h5 class="mb-1">{{ $certificazione['livelli']['c2']['nome'] }}</h5>
                                        <p class="mb-0 text-muted">{{ $certificazione['livelli']['c2']['descrizione'] }}</p>
                                    </div>
                                    <div class="text-end">
                                        <div class="fw-bold">&euro; {{ number_format($certificazione['livelli']['c2']['prezzo'], 2, ',', '.') }}</div>
                                        <button class="btn btn-sm btn-primary mt-2">Acquista</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row mt-5">
        <div class="col-12">
            <h3>Descrizione della Certificazione</h3>
            <hr>
            <p>{{ $certificazione['descrizione_lunga'] }}</p>
            
            <h4 class="mt-4">Vantaggi della Certificazione</h4>
            <ul>
                @foreach($certificazione['vantaggi'] as $vantaggio)
                    <li>{{ $vantaggio }}</li>
                @endforeach
            </ul>
            
            <h4 class="mt-4">Modalit&agrave; di Acquisto</h4>
            <p>{{ $certificazione['modalita_acquisto'] }}</p>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
@endsection