@extends('layouts.gestion_layout.app')

@section('title', 'PRICY - Interface de gestion')

@section('content')
    <div class="container-fluid py-3 py-lg-4">
        <div class="card border-0 shadow-sm rounded-4">
            <div class="card-body p-3 p-lg-4">
                <div class="d-flex flex-column flex-lg-row justify-content-between align-items-lg-center gap-3 mb-4">
                    <div>
                        <h1 class="h3 fw-bold mb-1">Interface de gestion</h1>
                        <p class="text-muted mb-0">Bienvenue dans l'espace de pilotage de votre entreprise.</p>
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        <input type="search" class="form-control form-control-sm pricy-search-input" placeholder="Rechercher un fichier...">
                        <button class="btn btn-outline-primary btn-sm">Filtrer</button>
                        <button class="btn btn-outline-secondary btn-sm">Profil</button>
                    </div>
                </div>

                <h2 class="h6 text-uppercase text-muted fw-bold mb-3">Acces rapide</h2>
                <div class="row g-3 mb-4">
                    <div class="col-12 col-md-6 col-xl-3">
                        <div class="card h-100 border-0 pricy-quick-card pricy-quick-card-primary">
                            <div class="card-body">
                                <p class="small mb-2 text-uppercase">Partage avec</p>
                                <h3 class="h6 mb-1">Dossier social</h3>
                                <p class="small mb-0 opacity-75">Statuts, registres, legal</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-xl-3">
                        <div class="card h-100 border-0 pricy-quick-card">
                            <div class="card-body">
                                <p class="small mb-2 text-uppercase">Partage avec</p>
                                <h3 class="h6 mb-1">Documents RH</h3>
                                <p class="small mb-0 text-muted">Contrats, suivis equipe</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-xl-3">
                        <div class="card h-100 border-0 pricy-quick-card">
                            <div class="card-body">
                                <p class="small mb-2 text-uppercase">Partage avec</p>
                                <h3 class="h6 mb-1">Documents fiscaux</h3>
                                <p class="small mb-0 text-muted">Taxes et declarations</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-xl-3">
                        <div class="card h-100 border-0 pricy-quick-card">
                            <div class="card-body">
                                <p class="small mb-2 text-uppercase">Projet</p>
                                <h3 class="h6 mb-1">Synthese entreprise</h3>
                                <p class="small mb-0 text-muted">Derniere mise a jour: aujourd'hui</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-flex justify-content-between align-items-center mb-2">
                    <h2 class="h6 text-uppercase text-muted fw-bold mb-0">Tous les fichiers</h2>
                    <button class="btn btn-primary btn-sm">Nouveau fichier</button>
                </div>

                <div class="table-responsive">
                    <table class="table align-middle pricy-table mb-0">
                        <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Proprietaire</th>
                                <th>Derniere modification</th>
                                <th>Taille</th>
                                <th class="text-end">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Rapport Hebdomadaire.pdf</td>
                                <td>Owner</td>
                                <td>Aujourd'hui, 09:10</td>
                                <td>20 MB</td>
                                <td class="text-end"><a href="#" class="btn btn-sm btn-link text-decoration-none">...</a></td>
                            </tr>
                            <tr>
                                <td>Checklist Compliance.xlsx</td>
                                <td>Owner</td>
                                <td>Hier, 16:20</td>
                                <td>12 MB</td>
                                <td class="text-end"><a href="#" class="btn btn-sm btn-link text-decoration-none">...</a></td>
                            </tr>
                            <tr>
                                <td>Plan Financier 2026.xlsx</td>
                                <td>Owner</td>
                                <td>28 Avril 2026</td>
                                <td>8 MB</td>
                                <td class="text-end"><a href="#" class="btn btn-sm btn-link text-decoration-none">...</a></td>
                            </tr>
                            <tr>
                                <td>Presentation Projet.pptx</td>
                                <td>Equipe</td>
                                <td>26 Avril 2026</td>
                                <td>30 MB</td>
                                <td class="text-end"><a href="#" class="btn btn-sm btn-link text-decoration-none">...</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
