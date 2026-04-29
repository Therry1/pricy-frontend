<header class="pricy-header" role="banner">
    <nav class="navbar navbar-expand-lg navbar-dark bg-transparent py-2">
        <div class="container">
            <a class="navbar-brand fw-bold text-uppercase pricy-brand text-white" href="{{ url('/') }}" aria-label="Pricy - Accueil">Pricy</a>

            <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#pricyNavbar" aria-controls="pricyNavbar" aria-expanded="false" aria-label="Navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="pricyNavbar">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0 gap-lg-2">
                    <li class="nav-item"><a class="nav-link pricy-nav-link" href="#how-it-works">FONCTIONNEMENT</a></li>
                    <li class="nav-item"><a class="nav-link pricy-nav-link" href="#find-savings">AVANTAGES</a></li>
                    <li class="nav-item"><a class="nav-link pricy-nav-link" href="#support">SUPPORT</a></li>
                    <li class="nav-item"><a class="nav-link pricy-nav-link" href="#blog">BLOG</a></li>
                </ul>

                <div class="d-flex align-items-center gap-2 pricy-nav-actions">
                    <a class="btn btn-link text-decoration-none text-white fw-semibold p-0 px-2" href="{{ route('client.login') }}">Connexion</a>
                    <a class="btn btn-warning text-white fw-semibold px-3 py-1" href="{{ route('client.register') }}">Inscription</a>
                </div>
            </div>
        </div>
    </nav>
</header>

