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

    <section class="py-5 bg-light overflow-hidden" id="how-it-works">
        <div class="container py-lg-5">
            <div class="text-center mb-5 fade-in-up">
                <h2 class="display-5 fw-bold mb-3">Comment ça marche ?</h2>
                <p class="text-muted mx-auto" style="max-width: 600px;">
                    Pricy simplifie la complexité de votre gestion d'entreprise en trois étapes simples et intuitives.
                </p>
            </div>

            <div class="row g-4">
                <!-- Step 1 -->
                <div class="col-md-4 fade-in-up delay-1">
                    <div class="card h-100 border-0 shadow-sm text-center p-4 pricy-step-card">
                        <div class="step-icon-wrapper mb-4 mx-auto bg-warning-subtle text-warning">
                            <i class="bi bi-person-plus-fill fs-2"></i>
                        </div>
                        <h4 class="fw-bold mb-3">1. Créer un compte</h4>
                        <p class="text-muted small">Remplissez les informations de base de votre structure et configurez votre profil d'utilisateur principal en quelques secondes.</p>
                    </div>
                </div>

                <!-- Step 2 -->
                <div class="col-md-4 fade-in-up delay-2">
                    <div class="card h-100 border-0 shadow-sm text-center p-4 pricy-step-card">
                        <div class="step-icon-wrapper mb-4 mx-auto bg-primary-subtle text-primary">
                            <i class="bi bi-gear-wide-connected fs-2"></i>
                        </div>
                        <h4 class="fw-bold mb-3">2. Configurer l'Espace</h4>
                        <p class="text-muted small">Validez vos données et activez votre espace de travail. Personnalisez vos tableaux de bord selon vos besoins spécifiques.</p>
                    </div>
                </div>

                <!-- Step 3 -->
                <div class="col-md-4 fade-in-up delay-3">
                    <div class="card h-100 border-0 shadow-sm text-center p-4 pricy-step-card">
                        <div class="step-icon-wrapper mb-4 mx-auto bg-success-subtle text-success">
                            <i class="bi bi-graph-up-arrow fs-2"></i>
                        </div>
                        <h4 class="fw-bold mb-3">3. Gérer & Piloter</h4>
                        <p class="text-muted small">Accédez immédiatement à vos outils de gestion. Suivez vos stocks, votre personnel et votre comptabilité en un coup d'œil.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        .step-icon-wrapper {
            width: 80px;
            height: 80px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 20px;
            transition: all 0.3s ease;
        }
        .pricy-step-card {
            border-radius: 24px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .pricy-step-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 1rem 3rem rgba(0,0,0,0.08) !important;
        }
        .pricy-step-card:hover .step-icon-wrapper {
            transform: scale(1.1) rotate(5deg);
        }

        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .fade-in-up {
            opacity: 0;
            animation: fadeInUp 0.8s ease forwards;
        }
        .delay-1 { animation-delay: 0.2s; }
        .delay-2 { animation-delay: 0.4s; }
        .delay-3 { animation-delay: 0.6s; }
    </style>

    <section class="py-5 bg-white" id="company-overview">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold mb-3">Nos Entreprises Partenaires</h2>
                <p class="text-muted">Découvrez les structures qui nous font confiance à travers le monde.</p>
                <div class="row justify-content-center mt-4">
                    <div class="col-md-6 col-lg-4">
                        <div class="input-group shadow-sm rounded-pill overflow-hidden border">
                            <span class="input-group-text bg-white border-0 ps-3">
                                <i class="bi bi-search text-muted"></i>
                            </span>
                            <input type="text" id="companySearch" class="form-control border-0 py-2 shadow-none" placeholder="Rechercher une entreprise...">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row g-4" id="companyList">
                @php
                    $companies = [
                        ['name' => 'Global Logistics SA', 'slogan' => 'Connecter le monde, un conteneur à la fois.', 'joined' => '12 Janvier 2024', 'rating' => 5],
                        ['name' => 'EcoTrans Solutions', 'slogan' => 'Le transport durable pour un futur vert.', 'joined' => '05 Mars 2024', 'rating' => 4],
                        ['name' => 'Swift Cargo Express', 'slogan' => 'La rapidité au service de votre business.', 'joined' => '22 Février 2024', 'rating' => 4],
                        ['name' => 'OceanBlue Shipping', 'slogan' => 'Maîtriser les océans, sécuriser vos frets.', 'joined' => '30 Avril 2024', 'rating' => 5],
                        ['name' => 'SkyHigh Airways', 'slogan' => 'Le fret aérien sans limites.', 'joined' => '15 Avril 2024', 'rating' => 5],
                        ['name' => 'Atlas Heavy Industries', 'slogan' => 'Porter le poids de vos ambitions.', 'joined' => '10 Janvier 2024', 'rating' => 4],
                    ];
                @endphp

                @foreach($companies as $company)
                    <div class="col-12 col-md-6 col-lg-4 company-card-wrapper">
                        <div class="card h-100 border-0 shadow-sm pricy-company-card transition-all">
                            <div class="position-relative">
                                <img src="https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?auto=format&fit=crop&q=80&w=800" class="card-img-top company-img" alt="{{ $company['name'] }}" style="height: 200px; object-fit: cover;">
                                <div class="position-absolute top-0 end-0 p-2">
                                    <span class="badge bg-warning text-dark rounded-pill">
                                        @for($i = 0; $i < $company['rating']; $i++)
                                            <i class="bi bi-star-fill" style="font-size: 0.7rem;"></i>
                                        @endfor
                                    </span>
                                </div>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title fw-bold mb-1">{{ $company['name'] }}</h5>
                                <p class="text-primary small fw-semibold mb-2">{{ $company['slogan'] }}</p>
                                <hr class="my-2 opacity-10">
                                <div class="d-flex align-items-center justify-content-between mt-auto">
                                    <div class="small text-muted">
                                        <i class="bi bi-calendar3 me-1"></i> Membre depuis : {{ $company['joined'] }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div id="noResults" class="text-center py-5 d-none">
                <i class="bi bi-building-exclamation display-1 text-muted opacity-25"></i>
                <p class="mt-3 text-muted">Aucune entreprise ne correspond à votre recherche.</p>
            </div>
        </div>
    </section>

    <style>
        .pricy-company-card {
            transition: transform 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275), box-shadow 0.3s ease;
            cursor: pointer;
        }
        .pricy-company-card:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: 0 1rem 3rem rgba(0,0,0,0.1) !important;
            z-index: 10;
        }
        .company-img {
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
            filter: grayscale(20%);
            transition: filter 0.3s ease;
        }
        .pricy-company-card:hover .company-img {
            filter: grayscale(0%);
        }
        #company-overview {
            scroll-behavior: auto !important;
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const searchInput = document.getElementById('companySearch');
            const cards = document.querySelectorAll('.company-card-wrapper');
            const noResults = document.getElementById('noResults');

            searchInput.addEventListener('input', function() {
                const query = this.value.toLowerCase().trim();
                let visibleCount = 0;

                cards.forEach(card => {
                    const name = card.querySelector('.card-title').textContent.toLowerCase();
                    const slogan = card.querySelector('.text-primary').textContent.toLowerCase();
                    
                    if (name.includes(query) || slogan.includes(query)) {
                        card.classList.remove('d-none');
                        visibleCount++;
                    } else {
                        card.classList.add('d-none');
                    }
                });

                if (visibleCount === 0) {
                    noResults.classList.remove('d-none');
                } else {
                    noResults.classList.add('d-none');
                }
            });
        });
    </script>

    <section class="py-5 bg-light" id="pricing">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold mb-3">Nos Formules d'Abonnement</h2>
                <p class="text-muted">Choisissez le plan qui correspond le mieux à la taille de votre structure.</p>
            </div>

            <div class="row g-4 justify-content-center">
                <!-- Plan FREE -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-sm pricy-pricing-card">
                        <div class="card-body p-4 p-xl-5">
                            <div class="mb-4">
                                <h3 class="h5 fw-bold text-uppercase text-muted">FREE</h3>
                                <div class="d-flex align-items-baseline">
                                    <span class="display-5 fw-bold text-dark">0</span>
                                    <span class="ms-1 text-muted fw-semibold">FCFA / mois</span>
                                </div>
                            </div>
                            <ul class="list-unstyled mb-5">
                                <li class="mb-3 d-flex align-items-center">
                                    <i class="bi bi-check-circle-fill text-success me-2"></i>
                                    <span>Gestion du stock</span>
                                </li>
                                <li class="mb-3 d-flex align-items-center opacity-50 text-decoration-line-through">
                                    <i class="bi bi-x-circle-fill text-muted me-2"></i>
                                    <span>Gestion du personnel</span>
                                </li>
                                <li class="mb-3 d-flex align-items-center opacity-50 text-decoration-line-through">
                                    <i class="bi bi-x-circle-fill text-muted me-2"></i>
                                    <span>Comptabilité complète</span>
                                </li>
                            </ul>
                            <a href="#" class="btn btn-outline-dark w-100 fw-bold py-2 rounded-pill">COMMENCER</a>
                        </div>
                    </div>
                </div>

                <!-- Plan INTERMÉDIAIRE -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow pricy-pricing-card border-primary-top">
                        <div class="card-body p-4 p-xl-5">
                            <div class="mb-4">
                                <h3 class="h5 fw-bold text-uppercase text-primary">INTERMÉDIAIRE</h3>
                                <div class="d-flex align-items-baseline">
                                    <span class="display-5 fw-bold text-dark">2000</span>
                                    <span class="ms-1 text-muted fw-semibold">FCFA / mois</span>
                                </div>
                            </div>
                            <ul class="list-unstyled mb-5">
                                <li class="mb-3 d-flex align-items-center">
                                    <i class="bi bi-check-circle-fill text-success me-2"></i>
                                    <span>Gestion du stock</span>
                                </li>
                                <li class="mb-3 d-flex align-items-center">
                                    <i class="bi bi-check-circle-fill text-success me-2"></i>
                                    <span>Gestion du personnel</span>
                                </li>
                                <li class="mb-3 d-flex align-items-center opacity-50 text-decoration-line-through">
                                    <i class="bi bi-x-circle-fill text-muted me-2"></i>
                                    <span>Comptabilité complète</span>
                                </li>
                            </ul>
                            <a href="#" class="btn btn-primary w-100 fw-bold py-2 rounded-pill shadow-sm">S'ABONNER</a>
                        </div>
                    </div>
                </div>

                <!-- Plan PRÉMIUM -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-lg pricy-pricing-card premium-gradient text-white scale-110">
                        <div class="position-absolute top-0 start-50 translate-middle-x">
                            <span class="badge bg-warning text-dark px-3 py-2 rounded-pill fw-bold shadow-sm" style="font-size: 0.7rem; margin-top: -12px;">LE PLUS POPULAIRE</span>
                        </div>
                        <div class="card-body p-4 p-xl-5">
                            <div class="mb-4">
                                <h3 class="h5 fw-bold text-uppercase text-warning">PRÉMIUM</h3>
                                <div class="d-flex align-items-baseline">
                                    <span class="display-5 fw-bold">4000</span>
                                    <span class="ms-1 opacity-75 fw-semibold">FCFA / mois</span>
                                </div>
                            </div>
                            <ul class="list-unstyled mb-5">
                                <li class="mb-3 d-flex align-items-center">
                                    <i class="bi bi-check-circle-fill text-warning me-2"></i>
                                    <span>Gestion du stock</span>
                                </li>
                                <li class="mb-3 d-flex align-items-center">
                                    <i class="bi bi-check-circle-fill text-warning me-2"></i>
                                    <span>Comptabilité entière</span>
                                </li>
                                <li class="mb-3 d-flex align-items-center">
                                    <i class="bi bi-check-circle-fill text-warning me-2"></i>
                                    <span>Exposition des produits</span>
                                </li>
                                <li class="mb-3 d-flex align-items-center">
                                    <i class="bi bi-check-circle-fill text-warning me-2"></i>
                                    <span>Permissions & Management</span>
                                </li>
                                <li class="mb-3 d-flex align-items-center">
                                    <i class="bi bi-check-circle-fill text-warning me-2"></i>
                                    <span>Gestion totale du personnel</span>
                                </li>
                            </ul>
                            <a href="#" class="btn btn-warning text-dark w-100 fw-bold py-3 rounded-pill shadow-lg">GO PRÉMIUM</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        .pricy-pricing-card {
            border-radius: 20px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .pricy-pricing-card:hover {
            transform: translateY(-5px);
        }
        .border-primary-top {
            border-top: 5px solid #0d6efd !important;
        }
        .premium-gradient {
            background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%);
            border: 2px solid #fbbf24 !important;
        }
        .scale-110 {
            transform: scale(1.05);
            z-index: 2;
        }
        @media (max-width: 991px) {
            .scale-110 {
                transform: scale(1);
                margin-top: 2rem;
            }
        }
    </style>

    <section class="py-5 bg-white" id="about-pricy">
        <div class="container py-lg-5">
            <div class="row g-5 align-items-center">
                <!-- CEO Photo -->
                <div class="col-lg-5 order-2 order-lg-1">
                    <div class="position-relative">
                        <div class="pricy-ceo-frame shadow-lg rounded-4 overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&q=80&w=800" class="img-fluid w-100" alt="CEO Pricy">
                        </div>
                        <div class="position-absolute bottom-0 start-0 bg-warning text-dark px-4 py-3 rounded-tr-4 shadow-sm" style="border-top-right-radius: 30px;">
                            <h5 class="fw-bold mb-0">CEO & Founder</h5>
                        </div>
                    </div>
                </div>

                <!-- Info Section -->
                <div class="col-lg-7 order-1 order-lg-2">
                    <div class="ps-lg-4">
                        <h2 class="display-6 fw-bold mb-4">À Propos de Pricy</h2>
                        <div class="mb-4">
                            <h4 class="h5 text-primary fw-bold mb-2">Notre Dirigeant</h4>
                            <p class="fs-5 fw-semibold mb-0">M. BOGANGWACK KENGNE CLAUDY MUNICH MERVEILLE</p>
                        </div>

                        <div class="row g-4 mb-5">
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="bg-light p-3 rounded-circle text-primary">
                                        <i class="bi bi-geo-alt-fill fs-4"></i>
                                    </div>
                                    <div>
                                        <p class="text-muted small mb-0">Siège Social</p>
                                        <p class="fw-bold mb-0">Ngaoundéré, Cameroun</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="bg-light p-3 rounded-circle text-primary">
                                        <i class="bi bi-calendar-check-fill fs-4"></i>
                                    </div>
                                    <div>
                                        <p class="text-muted small mb-0">Date de Création</p>
                                        <p class="fw-bold mb-0">30 Avril 2026</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <p class="text-muted mb-4 lead">
                            Pricy est née d'une vision audacieuse : simplifier la gestion des structures complexes pour permettre aux entrepreneurs de se concentrer sur l'essentiel. Depuis notre siège à Ngaoundéré, nous construisons l'avenir de la gestion digitale.
                        </p>

                        <a href="#" class="btn btn-dark btn-lg px-5 py-3 rounded-pill fw-bold shadow-sm">
                            À PROPOS <i class="bi bi-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        .pricy-ceo-frame {
            border: 8px solid #f8f9fa;
            transition: transform 0.3s ease;
        }
        .pricy-ceo-frame:hover {
            transform: rotate(-2deg) scale(1.02);
        }
        .rounded-tr-4 {
            border-top-right-radius: 1.5rem !important;
        }
    </style>

    <footer class="pt-5 pb-4 bg-dark text-white border-top border-secondary" id="support">
        <div class="container">
            <div class="row g-4 mb-5">
                <!-- Column 1: About -->
                <div class="col-lg-4 col-md-6">
                    <div class="mb-4">
                        <h4 class="fw-bold text-warning mb-3">Pricy</h4>
                        <p class="text-white-50 small pe-lg-5">
                            Pricy est votre partenaire de confiance pour la gestion simplifiée et intelligente de vos structures professionnelles. De Ngaoundéré vers le monde entier.
                        </p>
                    </div>
                    <div class="d-flex gap-3 fs-5">
                        <a href="#" class="text-white-50 hover-text-warning transition-all"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="text-white-50 hover-text-warning transition-all"><i class="bi bi-twitter-x"></i></a>
                        <a href="#" class="text-white-50 hover-text-warning transition-all"><i class="bi bi-linkedin"></i></a>
                        <a href="#" class="text-white-50 hover-text-warning transition-all"><i class="bi bi-instagram"></i></a>
                    </div>
                </div>

                <!-- Column 2: Quick Links -->
                <div class="col-lg-2 col-md-6">
                    <h5 class="fw-bold mb-4">Navigation</h5>
                    <ul class="list-unstyled d-grid gap-2">
                        <li><a href="#" class="text-white-50 text-decoration-none small hover-text-white transition-all">Accueil</a></li>
                        <li><a href="#how-it-works" class="text-white-50 text-decoration-none small hover-text-white transition-all">Comment ça marche</a></li>
                        <li><a href="#company-overview" class="text-white-50 text-decoration-none small hover-text-white transition-all">Partenaires</a></li>
                        <li><a href="#pricing" class="text-white-50 text-decoration-none small hover-text-white transition-all">Tarifs</a></li>
                        <li><a href="#about-pricy" class="text-white-50 text-decoration-none small hover-text-white transition-all">À Propos</a></li>
                    </ul>
                </div>

                <!-- Column 3: Services -->
                <div class="col-lg-3 col-md-6">
                    <h5 class="fw-bold mb-4">Nos Solutions</h5>
                    <ul class="list-unstyled d-grid gap-2">
                        <li><a href="#" class="text-white-50 text-decoration-none small hover-text-white transition-all">Gestion de Stock</a></li>
                        <li><a href="#" class="text-white-50 text-decoration-none small hover-text-white transition-all">Gestion du Personnel</a></li>
                        <li><a href="#" class="text-white-50 text-decoration-none small hover-text-white transition-all">Comptabilité Digitale</a></li>
                        <li><a href="#" class="text-white-50 text-decoration-none small hover-text-white transition-all">Management & Permissions</a></li>
                        <li><a href="#" class="text-white-50 text-decoration-none small hover-text-white transition-all">Exposition Produits</a></li>
                    </ul>
                </div>

                <!-- Column 4: Contact -->
                <div class="col-lg-3 col-md-6">
                    <h5 class="fw-bold mb-4">Contactez-nous</h5>
                    <ul class="list-unstyled d-grid gap-3">
                        <li class="d-flex align-items-start gap-3">
                            <i class="bi bi-geo-alt text-warning"></i>
                            <span class="text-white-50 small">Ngaoundéré, Adamaoua<br>Cameroun</span>
                        </li>
                        <li class="d-flex align-items-center gap-3">
                            <i class="bi bi-envelope text-warning"></i>
                            <a href="mailto:support@pricy.local" class="text-white-50 text-decoration-none small hover-text-white transition-all">support@pricy.local</a>
                        </li>
                        <li class="d-flex align-items-center gap-3">
                            <i class="bi bi-telephone text-warning"></i>
                            <span class="text-white-50 small">+237 6XX XX XX XX</span>
                        </li>
                    </ul>
                </div>
            </div>

            <hr class="opacity-10 mb-4">

            <div class="d-flex flex-column flex-md-row justify-content-between align-items-center gap-3">
                <div class="small text-white-50">
                    &copy; {{ date('Y') }} <strong class="text-white">Pricy</strong>. Tous droits réservés.
                </div>
                <div class="d-flex gap-4">
                    <a href="#" class="text-white-50 text-decoration-none x-small hover-text-white transition-all">Mentions Légales</a>
                    <a href="#" class="text-white-50 text-decoration-none x-small hover-text-white transition-all">Confidentialité</a>
                    <a href="#" class="text-white-50 text-decoration-none x-small hover-text-white transition-all">CGU</a>
                </div>
            </div>
        </div>
    </footer>

    <style>
        .hover-text-warning:hover { color: #ffc107 !important; }
        .hover-text-white:hover { color: #fff !important; }
        .transition-all { transition: all 0.3s ease; }
        .x-small { font-size: 0.75rem; }
    </style>
@endsection

