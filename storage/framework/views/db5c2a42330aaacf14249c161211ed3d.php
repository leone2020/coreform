<?php $__env->startSection('title', 'Coreform - La piattaforma per orientarti verso il tuo futuro universitario'); ?>

<?php $__env->startSection('content'); ?>
<!-- Hero Section -->
<section class="hero pt-5 mt-5">
    <div class="diagonal-stripes"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h1>La piattaforma per orientarti verso il tuo futuro universitario</h1>
                <p>Coreform ti guida nella scelta del percorso pi&ugrave; adatto alle tue ambizioni e competenze.</p>
                <div class="hero-buttons d-flex gap-3">
                    <a href="<?php echo e(url('/orientamento')); ?>" class="btn btn-light">Esplora Percorsi</a>
                    <a href="<?php echo e(url('/chi-siamo')); ?>" class="btn btn-outline-light">Scopri di Pi&ugrave;</a>
                </div>
            </div>
            <div class="col-lg-6 mt-5 mt-lg-0 text-center hero-image">
                <img src="<?php echo e(asset('images/studenti-universitari.png')); ?>" alt="Studenti universitari" class="img-fluid rounded-3">
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Servizi Principali</h2>
            <p class="section-subtitle">Esplora le nostre risorse e scopri il percorso pi&ugrave; adatto a te.</p>
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-compass"></i>
                    </div>
                    <h3 class="feature-title">Orientamento</h3>
                    <p class="feature-text">Scopri quale percorso universitario &egrave; pi&ugrave; adatto a te attraverso test attitudinali e consulenze personalizzate.</p>
                    <a href="<?php echo e(url('/orientamento')); ?>" class="btn btn-outline-primary">Scopri di pi&ugrave;</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-university"></i>
                    </div>
                    <h3 class="feature-title">Universit&agrave;</h3>
                    <p class="feature-text">Esplora le universit&agrave; e i corsi disponibili, confronta piani di studio e sbocchi professionali.</p>
                    <a href="<?php echo e(url('/universita')); ?>" class="btn btn-outline-primary">Scopri di pi&ugrave;</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-certificate"></i>
                    </div>
                    <h3 class="feature-title">Certificazioni</h3>
                    <p class="feature-text">La certificazione di cui hai bisogno in tempi brevi. Acquista corsi e ottieni attestati riconosciuti.</p>
                    <a href="<?php echo e(url('/certificazioni')); ?>" class="btn btn-outline-primary">Acquista il corso</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="section bg-light">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Percorsi di Formazione</h2>
            <p class="section-subtitle">Scopri le opportunit&agrave; per il tuo futuro professionale</p>
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card testimonial-card h-100">
                    <img src="<?php echo e(asset('images/economia.svg')); ?>" class="card-img" alt="Economia e Management">
                    <div class="card-img-overlay">
                        <h5 class="card-title text-white fw-bold mb-1">Economia e Management</h5>
                        <p class="card-text text-white small">Costruisci solide basi nel mondo dell'economia.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card testimonial-card h-100">
                    <img src="<?php echo e(asset('images/umanistiche.svg')); ?>" class="card-img" alt="Scienze Umanistiche">
                    <div class="card-img-overlay">
                        <h5 class="card-title text-white fw-bold mb-1">Scienze Umanistiche</h5>
                        <p class="card-text text-white small">Esplora il patrimonio culturale e letterario.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card testimonial-card h-100">
                    <img src="<?php echo e(asset('images/ingegneria.svg')); ?>" class="card-img" alt="Ingegneria">
                    <div class="card-img-overlay">
                        <h5 class="card-title text-white fw-bold mb-1">Ingegneria</h5>
                        <p class="card-text text-white small">Sviluppa competenze tecniche all'avanguardia.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="section stats-section">
    <div class="container">
        <div class="row g-4">
            <!-- Rimuovendo la card "15.000+ STUDENTI ORIENTATI" -->
            <div class="col-md-4">
                <div class="stat-card">
                    <div class="stat-number">100.000+</div>
                    <div class="stat-text">ISCRITTI L'ANNO</div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="stat-card">
                    <div class="stat-number">93</div>
                    <div class="stat-text">PERCORSI DI LAUREA</div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="stat-card">
                    <div class="stat-number">95%</div>
                    <div class="stat-text">TASSO DI SODDISFAZIONE</div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- CTA Section -->
<section class="cta-section">
    <div class="cta-diagonal-stripes"></div>
    <div class="container text-center cta-content">
        <h2 class="cta-title">Sosteniamo le tue aspirazioni</h2>
        <p class="cta-text">Connettiti al tuo futuro universitario con Coreform</p>
        <a href="<?php echo e(url('/inizia')); ?>" class="btn btn-light">Inizia Ora</a>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/coreform/resources/views/pages/home.blade.php ENDPATH**/ ?>