<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
    <div class="container">
        <a class="navbar-brand text-dark" href="{{ url('/') }}">Coreform</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('universita*') ? 'active' : '' }}" href="{{ url('/universita') }}">Universit&agrave;</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('certificazioni*') ? 'active' : '' }}" href="{{ url('/certificazioni') }}">Certificazioni</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('orientamento*') ? 'active' : '' }}" href="{{ url('/orientamento') }}">Orientamento</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('chi-siamo*') ? 'active' : '' }}" href="{{ url('/chi-siamo') }}">Chi Siamo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('contatti*') ? 'active' : '' }}" href="{{ url('/contatti') }}">Contatti</a>
                </li>
            </ul>
            <a href="{{ url('/inizia') }}" class="btn btn-primary ms-lg-3">Inizia Ora</a>
        </div>
    </div>
</nav>