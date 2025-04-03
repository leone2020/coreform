<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">Coreform</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('chi-siamo') ? 'active' : '' }}" href="{{ route('chi-siamo') }}">Chi Siamo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('universita') ? 'active' : '' }}" href="{{ route('universita') }}">Università</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('orientamento') ? 'active' : '' }}" href="{{ route('orientamento') }}">Orientamento</a>
                </li>
		<li class="nav-item">
    		<a class="nav-link {{ request()->routeIs('certificazioni') ? 'active' : '' }}" href="{{ route('certificazioni') }}">Certificazioni</a>
		</li>	
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('contatti') ? 'active' : '' }}" href="{{ route('contatti') }}">Contatti</a>
                </li>
            </ul>
        </div>
    </div>
</nav>