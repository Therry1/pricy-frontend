<aside class="pricy-sidebar">
    <div class="p-3 p-lg-4">
        <a href="{{ route('gestion.dashboard') }}" class="text-decoration-none">
            <div class="d-flex align-items-center gap-2 mb-4">
                <span class="pricy-logo-dot"></span>
                <span class="fw-bold text-white fs-5">PRICY</span>
            </div>
        </a>

        <button class="btn btn-light btn-sm w-100 fw-semibold mb-4">Ajouter un dossier</button>

        <div class="list-group pricy-side-menu">
            <a href="{{ route('gestion.dashboard') }}" class="list-group-item list-group-item-action active">Tableau de bord</a>
            <a href="#" class="list-group-item list-group-item-action">Mes entreprises</a>
            <a href="#" class="list-group-item list-group-item-action">Documents</a>
            <a href="#" class="list-group-item list-group-item-action">Equipe</a>
            <a href="#" class="list-group-item list-group-item-action">Parametres</a>
            <a href="{{ route('client.login') }}" class="list-group-item list-group-item-action">Deconnexion</a>
        </div>
    </div>
</aside>
