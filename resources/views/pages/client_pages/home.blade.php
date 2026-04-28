@extends('layouts.client_layout.app')

@section('title', 'Pricy - Accueil')

@section('content')
    @php
        $slides = glob(public_path('client/images/diaporama_images/*.png')) ?: [];
        sort($slides);
    @endphp

    <section class="pricy-hero-section">
        <div id="pricyHomeCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="4500" aria-label="Diaporama Pricy">
            <div class="carousel-inner">
                @forelse($slides as $index => $slide)
                    <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                        <img class="d-block w-100 pricy-carousel-image" src="{{ asset('client/images/diaporama_images/' . basename($slide)) }}" alt="Slide Pricy {{ $index + 1 }}">
                    </div>
                @empty
                    <div class="carousel-item active">
                        <div class="pricy-carousel-image pricy-carousel-fallback"></div>
                    </div>
                @endforelse
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#pricyHomeCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#pricyHomeCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <div class="pricy-carousel-overlay"></div>

        <div class="pricy-hero-content container text-center text-white">
            <h1 class="display-4 fw-bold mb-2">It's all coming together</h1>
            <p class="lead mb-4 pricy-caption-text">
                When you're on top of your structure, life is good.
                Pricy helps you manage your activities in one place.
            </p>

            <a class="btn btn-warning text-white fw-bold px-4 py-2" href="{{ route('client.register') }}">SIGN UP FREE</a>
        </div>
    </section>

    <section class="py-5 bg-white">
        <div class="container">
            <div class="row g-4 text-center">
                <div class="col-12 col-md-4" id="find-savings">
                    <h3 class="h4 fw-bold mb-2">Budgets? You betcha</h3>
                    <p class="text-muted mb-0">Easily create budgets and see our suggestions based on your spending.</p>
                </div>
                <div class="col-12 col-md-4">
                    <h3 class="h4 fw-bold mb-2">Bills? Done</h3>
                    <p class="text-muted mb-0">Track and pay bills before due date, with useful schedule reminders.</p>
                </div>
                <div class="col-12 col-md-4">
                    <h3 class="h4 fw-bold mb-2">Credit score? Checked</h3>
                    <p class="text-muted mb-0">Find options for your profile and get tips to improve your score.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-light" id="how-it-works">
        <div class="container">
            <div class="row g-4 align-items-start">
                <div class="col-lg-6">
                    <h2 class="fw-bold mb-3">Comment ça marche</h2>
                    <p class="text-muted mb-0">
                        Pricy simplifie la gestion des structures: création du compte principal, enregistrement des
                        informations de base demandées, puis accès immédiat à votre espace de gestion personnel.
                    </p>
                </div>
                <div class="col-lg-6">
                    <div class="card shadow-sm border-0">
                        <div class="card-body">
                            <div class="d-flex mb-3">
                                <span class="badge text-bg-warning rounded-pill me-2">1</span>
                                <div><strong>Créer un compte</strong><div class="text-muted small">Informations de base de la structure et de l'utilisateur principal.</div></div>
                            </div>
                            <div class="d-flex mb-3">
                                <span class="badge text-bg-warning rounded-pill me-2">2</span>
                                <div><strong>Finaliser l'enregistrement</strong><div class="text-muted small">Validation des données puis activation de l'espace.</div></div>
                            </div>
                            <div class="d-flex">
                                <span class="badge text-bg-warning rounded-pill me-2">3</span>
                                <div><strong>Gérer votre structure</strong><div class="text-muted small">Suivi opérationnel et pilotage depuis un seul tableau de bord.</div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="py-4 bg-dark text-white" id="support">
        <div class="container d-flex flex-column flex-md-row justify-content-between align-items-center gap-2">
            <div>
                <strong>Pricy</strong>
                <div class="small text-white-50">© {{ date('Y') }} Pricy. Tous droits réservés.</div>
            </div>
            <div class="d-flex gap-3" id="blog">
                <a class="text-white-50 text-decoration-none" href="#how-it-works">How it works</a>
                <a class="text-white-50 text-decoration-none" href="mailto:support@pricy.local">Support</a>
                <a class="text-white-50 text-decoration-none" href="#">Blog</a>
            </div>
        </div>
    </footer>
@endsection

