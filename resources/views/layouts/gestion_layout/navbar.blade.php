<aside class="pricy-sidebar d-flex flex-column">
    <!-- Profile Section -->
    <div class="pricy-profile-section p-3 p-lg-4 d-flex align-items-center gap-3">
        <div class="rounded-circle bg-white overflow-hidden shadow-sm d-flex align-items-center justify-content-center" style="width: 48px; height: 48px;">
            <!-- Placeholder for profile photo -->
            <i class="bi bi-person-fill text-muted fs-4"></i>
        </div>
        <div>
            <p class="small text-uppercase fw-bold mb-0 opacity-75 text-white-50">To Do Buddy</p>
            <h6 class="fw-bold mb-0 text-white">NEAMU TIBERIU</h6>
        </div>
    </div>

    <!-- Menu Section -->
    <div class="p-3 p-lg-4 flex-grow-1 overflow-auto">
        <div class="list-group pricy-side-menu list-group-flush">
            <a href="{{ route('gestion.dashboard') }}" class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-3 border-0">
                <i class="fa fa-dashboard" style="color: orangered;"></i> DASHBOARD
            </a>

            <!-- Gestion des identités et des acces -->
            <div class="pricy-nested-menu">
                <a href="#produitMenu" class="list-group-item list-group-item-action d-flex align-items-center justify-content-between gap-3 py-3 border-0" data-bs-toggle="collapse" role="button" aria-expanded="false">
                    <span class="d-flex align-items-center gap-3">
                        <i class="fa fa-tags" style="color: orangered;"></i> GESTION DES IDENTITES ET ACCES (IAM)
                    </span>
                    <i class="fa fa-chevron-down small transition-all dropdown-chevron"></i>
                </a>
                <div class="collapse ps-4" id="produitMenu">
                    <a href="#" class="list-group-item list-group-item-action py-2 border-0 small opacity-75 hover-opacity-100 text-white-50">Ajouter un utilisateur</a>
                    <a href="#" class="list-group-item list-group-item-action py-2 border-0 small opacity-75 hover-opacity-100 text-white-50">liste des utilisateurs</a>
                    <a href="#" class="list-group-item list-group-item-action py-2 border-0 small opacity-75 hover-opacity-100 text-white-50">Ajouter un role</a>
                    <a href="#" class="list-group-item list-group-item-action py-2 border-0 small opacity-75 hover-opacity-100 text-white-50">liste des roles</a>
                </div>
            </div>

            <!-- Gestion de Produit -->
            <div class="pricy-nested-menu">
                <a href="#produitMenu" class="list-group-item list-group-item-action d-flex align-items-center justify-content-between gap-3 py-3 border-0" data-bs-toggle="collapse" role="button" aria-expanded="false">
                    <span class="d-flex align-items-center gap-3">
                        <i class="fa fa-tags" style="color: orangered;"></i> GESTION DE PRODUIT
                    </span>
                    <i class="fa fa-chevron-down small transition-all dropdown-chevron"></i>
                </a>
                <div class="collapse ps-4" id="produitMenu">
                    <a href="#" class="list-group-item list-group-item-action py-2 border-0 small opacity-75 hover-opacity-100 text-white-50">Ajouter un produit</a>
                    <a href="#" class="list-group-item list-group-item-action py-2 border-0 small opacity-75 hover-opacity-100 text-white-50">Lister les produits disponible</a>
                </div>
            </div>

            <!-- Gestion de Stock -->
            <div class="pricy-nested-menu">
                <a href="#stockMenu" class="list-group-item list-group-item-action d-flex align-items-center justify-content-between gap-3 py-3 border-0" data-bs-toggle="collapse" role="button" aria-expanded="false">
                    <span class="d-flex align-items-center gap-3">
                        <i class="fa fa-cubes" style="color: orangered;"></i> GESTION DE STOCK
                    </span>
                    <i class="fa fa-chevron-down small transition-all dropdown-chevron"></i>
                </a>
                <div class="collapse ps-4" id="stockMenu">
                    <a href="#" class="list-group-item list-group-item-action py-2 border-0 small opacity-75 hover-opacity-100 text-white-50">Consulter le stock</a>
                    <a href="#" class="list-group-item list-group-item-action py-2 border-0 small opacity-75 hover-opacity-100 text-white-50">Consulter les inventaire</a>
                </div>
            </div>

            <!-- Comptabilité et Finance -->
            <div class="pricy-nested-menu">
                <a href="#financeMenu" class="list-group-item list-group-item-action d-flex align-items-center justify-content-between gap-3 py-3 border-0" data-bs-toggle="collapse" role="button" aria-expanded="false">
                    <span class="d-flex align-items-center gap-3">
                        <i class="fa fa-money" style="color: orangered;"></i> COMPTABILITÉ ET FINANCE
                    </span>
                    <i class="fa fa-chevron-down small transition-all dropdown-chevron"></i>
                </a>
                <div class="collapse ps-4" id="financeMenu">
                    <a href="#" class="list-group-item list-group-item-action py-2 border-0 small opacity-75 hover-opacity-100 text-white-50">Rapport journalier des vente</a>
                    <a href="#" class="list-group-item list-group-item-action py-2 border-0 small opacity-75 hover-opacity-100 text-white-50">Simulation d'un calcul</a>
                </div>
            </div>

            <a href="#" class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-3 border-0">
                <i class="fa fa-image" style="color: orangered;"></i> VISUAL ATTACHMENTS
            </a>
            <a href="#" class="list-group-item list-group-item-action active d-flex align-items-center gap-3 py-3 border-0">
                <i class="fa fa-bar-chart" style="color: orangered;"></i> PROJECT STATISTICS
            </a>
            <a href="#" class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-3 border-0">
                <i class="fa fa-users" style="color: orangered;"></i> TEAM MEMBERS
            </a>
            <a href="#" class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-3 border-0">
                <i class="fa fa-server" style="color: orangered;"></i> SERVER DATA
            </a>
            <a href="#" class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-3 border-0">
                <i class="fa fa-folder-open" style="color: orangered;"></i> FOLDER SETTINGS
            </a>
            <a href="#" class="list-group-item list-group-item-action d-flex align-items-center justify-content-between gap-3 py-3 border-0">
                <span class="d-flex align-items-center gap-3">
                    <i class="fa fa-comments" style="color: orangered;"></i> MESSAGES
                </span>
                <span class="badge rounded-pill bg-danger">227</span>
            </a>
        </div>
    </div>

    <!-- Progress Indicator -->
    <div class="p-4 mt-auto">
        <div class="text-center">
            <div class="position-relative d-inline-block">
                <svg width="100" height="100" viewBox="0 0 100 100">
                    <circle cx="50" cy="50" r="45" fill="none" stroke="rgba(255,255,255,0.1)" stroke-width="8" />
                    <circle cx="50" cy="50" r="45" fill="none" stroke="#ff5252" stroke-width="8" 
                            stroke-dasharray="282.7" stroke-dashoffset="56.5" 
                            stroke-linecap="round" transform="rotate(-90 50 50)" />
                </svg>
                <div class="position-absolute top-50 start-50 translate-middle text-white">
                    <h4 class="fw-bold mb-0">80%</h4>
                    <p class="small text-uppercase mb-0" style="font-size: 0.6rem;">Completed</p>
                </div>
            </div>
        </div>
    </div>
</aside>
