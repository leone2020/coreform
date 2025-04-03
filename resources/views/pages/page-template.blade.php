cat > resources/views/pages/page-template.blade.php << 'EOL'
@extends('layouts.app')

@section('title', 'Titolo Pagina - Coreform')

@section('content')
<!-- Page Header -->
<section class="page-header">
    <div class="diagonal-stripes"></div>
    <div class="container">
        <h1 class="page-title">Titolo Pagina</h1>
        <p class="page-subtitle">Sottotitolo della pagina con descrizione breve.</p>
    </div>
</section>

<!-- Content Section -->
<section class="content-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h2 class="content-title">Sezione Principale</h2>
                <p class="content-text">
                    Contenuto principale della pagina. Qui puoi inserire testo, immagini, tabelle e altri elementi di contenuto.
                </p>
                <!-- Altri contenuti -->
            </div>
            <div class="col-lg-4">
                <div class="custom-card">
                    <div class="card-body">
                        <h5 class="card-title">Sidebar Widget</h5>
                        <p class