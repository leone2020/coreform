<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
    <div class="container">
        <a class="navbar-brand text-dark" href="<?php echo e(url('/')); ?>">Coreform</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link <?php echo e(request()->is('/') ? 'active' : ''); ?>" href="<?php echo e(url('/')); ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo e(request()->is('universita*') ? 'active' : ''); ?>" href="<?php echo e(url('/universita')); ?>">Universit&agrave;</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo e(request()->is('certificazioni*') ? 'active' : ''); ?>" href="<?php echo e(url('/certificazioni')); ?>">Certificazioni</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo e(request()->is('orientamento*') ? 'active' : ''); ?>" href="<?php echo e(url('/orientamento')); ?>">Orientamento</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo e(request()->is('chi-siamo*') ? 'active' : ''); ?>" href="<?php echo e(url('/chi-siamo')); ?>">Chi Siamo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo e(request()->is('contatti*') ? 'active' : ''); ?>" href="<?php echo e(url('/contatti')); ?>">Contatti</a>
                </li>
            </ul>
            <a href="<?php echo e(url('/inizia')); ?>" class="btn btn-primary ms-lg-3">Inizia Ora</a>
        </div>
    </div>
</nav><?php /**PATH /var/www/coreform/resources/views/components/navbar.blade.php ENDPATH**/ ?>