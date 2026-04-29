<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>PRICY - Inscription</title>

    <link rel="stylesheet" href="{{ asset('v2/css/google-fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('v2/vendor/bootstrap/css/bootstrap.min.css') }}">
    <style>
        body {
            min-height: 100vh;
            margin: 0;
            font-family: "Inter", system-ui, -apple-system, Segoe UI, Roboto, Arial, sans-serif;
            background: url('{{ asset('client/images/login/c__Users_JOUVENCE_COMPUTER_AppData_Roaming_Cursor_User_workspaceStorage_ef5ddcae376ff3831db9fd7a74d1718d_images_Building-c766ee41-4fad-4096-9ed3-7f4a2f53933c.png') }}') center center / cover no-repeat fixed;
            position: relative;
            color: #fff;
        }

        body::before {
            content: "";
            position: absolute;
            inset: 0;
            background: rgba(7, 12, 24, 0.58);
            backdrop-filter: blur(1px);
        }

        .register-wrapper {
            position: relative;
            z-index: 1;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 1.5rem;
        }

        .register-panel {
            width: 100%;
            max-width: 700px;
            background: rgba(9, 15, 28, 0.45);
            border: 1px solid rgba(255, 255, 255, 0.34);
            border-radius: 0.5rem;
            padding: 2rem 1.8rem 1.6rem;
            box-shadow: 0 24px 50px rgba(0, 0, 0, 0.35);
        }

        .register-title {
            letter-spacing: 0.08em;
            text-transform: uppercase;
            font-weight: 500;
            text-align: center;
            margin-bottom: 0.4rem;
        }

        .register-subtitle {
            text-align: center;
            color: rgba(255, 255, 255, 0.85);
            margin-bottom: 1.4rem;
        }

        .section-title {
            text-transform: uppercase;
            letter-spacing: 0.04em;
            font-size: 0.85rem;
            font-weight: 700;
            color: rgba(255, 255, 255, 0.92);
            margin-bottom: 0.8rem;
        }

        .register-input,
        .register-select {
            background: rgba(255, 255, 255, 0.08);
            border: 1px solid rgba(255, 255, 255, 0.56);
            color: #fff;
            border-radius: 0;
        }

        .register-input::placeholder {
            color: rgba(255, 255, 255, 0.85);
        }

        .register-select option {
            color: #111;
        }

        .form-label {
            color: rgba(255, 255, 255, 0.86);
            margin-bottom: 0.35rem;
            font-size: 0.9rem;
        }

        .btn-register {
            border-radius: 0;
            font-weight: 600;
            letter-spacing: 0.02em;
        }

        .register-links a {
            color: rgba(255, 255, 255, 0.92);
            text-decoration: none;
        }

        .register-links a:hover {
            color: #fff;
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="register-wrapper">
        <div class="register-panel">
            <h1 class="h2 register-title">PRICY</h1>
            <p class="register-subtitle">Formulaire d'inscription</p>

            <form action="{{ route('gestion.dashboard') }}" method="get">

                <div class="mb-3">
                    <div class="section-title">Informations obligatoires de l'entreprise</div>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label" for="nom_legale">Nom legale</label>
                            <input id="nom_legale" name="nom_legale" type="text" class="form-control register-input" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="nom_commercial">Nom commercial</label>
                            <input id="nom_commercial" name="nom_commercial" type="text" class="form-control register-input" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="statut_juridique">Statut juridique</label>
                            <select id="statut_juridique" name="statut_juridique" class="form-select register-select" required>
                                <option value="" selected disabled>Selectionner</option>
                                <option>SARL</option>
                                <option>SA</option>
                                <option>SAS</option>
                                <option>Entreprise individuelle</option>
                                <option>Association</option>
                                <option>Autre</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="date_creation">Date de creation</label>
                            <input id="date_creation" name="date_creation" type="date" class="form-control register-input" required>
                        </div>
                    </div>
                </div>

                <hr class="border-light opacity-50 my-4">

                <div class="mb-4">
                    <div class="section-title">Informations du owner de la structure</div>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label" for="owner_username">Nom d'utilisateur</label>
                            <input id="owner_username" name="owner_username" type="text" class="form-control register-input" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="owner_email">Email</label>
                            <input id="owner_email" name="owner_email" type="email" class="form-control register-input" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="login_connexion">Login de connexion</label>
                            <input id="login_connexion" name="login_connexion" type="text" class="form-control register-input" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="password_connexion">Mot de passe de connexion</label>
                            <input id="password_connexion" name="password_connexion" type="password" class="form-control register-input" required>
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-light btn-lg w-100 btn-register text-dark">S'INSCRIRE</button>

                <div class="text-center mt-3 register-links">
                    <a class="small" href="{{ route('client.login') }}">Vous avez deja un compte ? Se connecter</a>
                </div>
            </form>
        </div>
    </div>

    <script src="{{ asset('v2/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
