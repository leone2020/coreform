@extends('layouts.app')

@section('title', 'Certificazioni - Coreform')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">Le nostre Certificazioni</h1>
    
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <!-- Offerta Bundle Certificazioni Informatiche -->
        <div class="col">
            <div class="card h-100 shadow-sm border border-primary">
                <div class="card-header bg-primary text-white">
                    <h5 class="card-title mb-0">OFFERTA SPECIALE</h5>
                </div>
                <img src="{{ asset('images/certificazioni/bundle-informatica.jpg') }}" class="card-img-top" alt="Bundle Certificazioni Informatiche">
                <div class="card-body">
                    <h5 class="card-title">Bundle Certificazioni Informatiche</h5>
                    <p class="card-text">Include: LIM, Coding, Tablet e Competenze Digitali Avanzate</p>
                    <ul class="list-unstyled mb-4">
                        <li>&check; Certificazione LIM</li>
                        <li>&check; Certificazione Coding</li>
                        <li>&check; Certificazione Tablet</li>
                        <li>&check; Certificazione Competenze Digitali Avanzate</li>
                    </ul>
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <del class="text-muted">&euro; 199,00</del>
                            <span class="fw-bold text-primary ms-2">&euro; 99,00</span>
                        </div>
                        <a href="{{ route('certificazione.dettaglio', ['slug' => 'bundle-informatica']) }}" class="btn btn-primary">Scopri di pi&ugrave;</a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Card Alfabetizzazione Digitale -->
        <div class="col">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('images/certificazioni/alfabetizzazione-digitale.jpg') }}" class="card-img-top" alt="Certificazione Alfabetizzazione Digitale">
                <div class="card-body">
                    <h5 class="card-title">Certificazione Internazionale di Alfabetizzazione Digitale</h5>
                    <p class="card-text">Obbligatoria per ATA, conforme al CCNL scuola in vigore dal 19 gennaio 2024.</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="fw-bold text-primary">&euro; 199,00</span>
                        <a href="{{ route('certificazione.dettaglio', ['slug' => 'alfabetizzazione-digitale']) }}" class="btn btn-primary">Scopri di pi&ugrave;</a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Card LIM -->
        <div class="col">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('images/certificazioni/lim.jpg') }}" class="card-img-top" alt="Certificazione LIM">
                <div class="card-body">
                    <h5 class="card-title">Certificazione LIM</h5>
                    <p class="card-text">Certificazione per l'uso didattico della Lavagna Interattiva Multimediale.</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="fw-bold text-primary">&euro; 149,00</span>
                        <a href="{{ route('certificazione.dettaglio', ['slug' => 'lim']) }}" class="btn btn-primary">Scopri di pi&ugrave;</a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Card EIPASS -->
        <div class="col">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('images/certificazioni/eipass.jpg') }}" class="card-img-top" alt="Certificazione EIPASS">
                <div class="card-body">
                    <h5 class="card-title">Certificazione EIPASS</h5>
                    <p class="card-text">European Informatics Passport, certificazione informatica riconosciuta a livello europeo.</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="fw-bold text-primary">&euro; 249,00</span>
                        <a href="{{ route('certificazione.dettaglio', ['slug' => 'eipass']) }}" class="btn btn-primary">Scopri di pi&ugrave;</a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Card Inglese -->
        <div class="col">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('images/certificazioni/inglese.jpg') }}" class="card-img-top" alt="Certificazione Lingua Inglese">
                <div class="card-body">
                    <h5 class="card-title">Certificazione di Lingua Inglese</h5>
                    <p class="card-text">Certificazione linguistica riconosciuta dal MIUR, livelli da A1 a C2.</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="fw-bold text-primary">da &euro; 499,00</span>
                        <a href="{{ route('certificazione.dettaglio', ['slug' => 'inglese']) }}" class="btn btn-primary">Scopri di pi&ugrave;</a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Card Coding -->
        <div class="col">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('images/certificazioni/coding.jpg') }}" class="card-img-top" alt="Certificazione Coding">
                <div class="card-body">
                    <h5 class="card-title">Certificazione Coding</h5>
                    <p class="card-text">Certifica le competenze di programmazione e pensiero computazionale.</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="fw-bold text-primary">&euro; 159,00</span>
                        <a href="{{ route('certificazione.dettaglio', ['slug' => 'coding']) }}" class="btn btn-primary">Scopri di pi&ugrave;</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection