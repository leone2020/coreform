@extends('layouts.app')

@section('title', 'UniversitÓ - Coreform')

@section('content')
<!-- Header immagine a tutto schermo -->
<div class="position-relative mb-5">
    <div class="ratio ratio-21x9">
        <img src="{{ asset('images/universita-header.jpg') }}" class="img-fluid" alt="UniversitÓ" style="object-fit: cover; width: 100%; max-height: 400px;">
    </div>
    <div class="position-absolute top-50 start-50 translate-middle text-center text-white">
        <h1 class="display-4 fw-bold" style="text-shadow: 2px 2px 4px rgba(0,0,0,0.8);">Universit&agrave; Telematica Pegaso: perch&eacute; iscriversi</h1>
    </div>
</div>

<div class="container">
    <div class="row mb-5">
        <div class="col-12 text-center">
            <h2 class="mb-4">Con UniPegaso, l'Universit&agrave; Digitale pi&ugrave; scelta in Italia, gestisci il tuo percorso universitario in totale libert&agrave;</h2>
        </div>
    </div>

    <div class="row mb-5">
        <div class="col-md-4 text-center mb-4">
            <div class="p-3">
                <img src="{{ asset('images/universita/device-icon.png') }}" alt="Accesso da dispositivi" class="img-fluid mb-3" style="max-width: 100px;">
                <h3>Puoi accedere alla piattaforma da pc, tablet o smartphone</h3>
                <a href="#" class="btn btn-outline-primary mt-3">Prova la piattaforma Pegaso</a>
            </div>
        </div>
        
        <div class="col-md-4 text-center mb-4">
            <div class="p-3">
                <img src="{{ asset('images/universita/discount-icon.png') }}" alt="Agevolazioni" class="img-fluid mb-3" style="max-width: 100px;">
                <h3>Scopri le agevolazioni economiche e risparmia fino al 50% sulla retta</h3>
                <a href="#" class="btn btn-outline-primary mt-3">Scopri le nostre agevolazioni</a>
            </div>
        </div>
        
        <div class="col-md-4 text-center mb-4">
            <div class="p-3">
                <img src="{{ asset('images/universita/calendar-icon.png') }}" alt="Iscrizione" class="img-fluid mb-3" style="max-width: 100px;">
                <h3>Puoi iscriverti in qualsiasi momento dell'anno, senza alcun costo aggiuntivo</h3>
                <a href="#" class="btn btn-outline-primary mt-3">Iscriviti ora a Pegaso</a>
            </div>
        </div>
    </div>
    
    <div class="row mb-4">
        <div class="col-md-6 mb-4 d-flex justify-content-center">
            <a href="#" class="btn btn-outline-primary btn-lg">Prova la piattaforma Mercatorum</a>
        </div>
        <div class="col-md-6 mb-4 d-flex justify-content-center">
            <a href="#" class="btn btn-outline-primary btn-lg">Iscriviti ora a Mercatorum</a>
        </div>
    </div>
    
    <div class="row mt-5">
        <div class="col-12 text-center">
            <h2 class="mb-4">Scopri Multiversity</h2>
            <p class="lead">Multiversity &egrave; il Gruppo leader in Italia nel settore dell'Education e comprende gli atenei digitali Pegaso, Mercatorum e San Raffaele, la coding academy Aulab e l'ente certificatore Certipass</p>
        </div>
    </div>
</div>
@endsection