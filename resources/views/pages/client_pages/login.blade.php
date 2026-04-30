<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>PRICY - Connexion</title>

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
            background: rgba(7, 12, 24, 0.55);
            backdrop-filter: blur(2px);
        }

        .login-wrapper {
            position: relative;
            z-index: 1;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 1.5rem;
        }

        .login-panel {
            width: 100%;
            max-width: 430px;
            background: rgba(9, 15, 28, 0.38);
            border: 1px solid rgba(255, 255, 255, 0.34);
            border-radius: 0.5rem;
            padding: 2rem 1.8rem 1.5rem;
            box-shadow: 0 24px 50px rgba(0, 0, 0, 0.35);
        }

        .login-title {
            letter-spacing: 0.08em;
            text-transform: uppercase;
            font-weight: 500;
            text-align: center;
            margin-bottom: 1.1rem;
        }

        .login-input {
            background: rgba(255, 255, 255, 0.08);
            border: 1px solid rgba(255, 255, 255, 0.56);
            color: #fff;
            border-radius: 0;
        }

        .login-input::placeholder {
            color: rgba(255, 255, 255, 0.85);
            text-transform: uppercase;
        }

        .input-group-text {
            border-radius: 0;
            border: 1px solid rgba(255, 255, 255, 0.56);
            border-left: 0;
            background: rgba(255, 255, 255, 0.10);
            color: #fff;
        }

        .btn-signin {
            border-radius: 0;
            font-weight: 600;
            letter-spacing: 0.02em;
        }

        .form-check-input {
            background-color: transparent;
            border-color: rgba(255, 255, 255, 0.75);
        }

        .login-links a {
            color: rgba(255, 255, 255, 0.9);
            text-decoration: none;
        }

        .login-links a:hover {
            color: #fff;
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="login-wrapper">
        <div class="login-panel">
            <h1 class="h2 login-title">PRICY</h1>

            <form action="{{ route('gestion.dashboard') }}" method="get">
                <div class="mb-3">
                    <div class="input-group">
                        <input type="text" class="form-control login-input" placeholder="ID du compte ou alias" aria-label="Nom d'utilisateur" required>
                        <span class="input-group-text">&#128100;</span>
                    </div>
                </div>

                <div class="mb-3">
                    <div class="input-group">
                        <input type="text" class="form-control login-input" placeholder="Nom d'utilisateur" aria-label="Nom d'utilisateur" required>
                        <span class="input-group-text">&#128100;</span>
                    </div>
                </div>

                <div class="mb-3">
                    <div class="input-group">
                        <input type="password" class="form-control login-input" placeholder="Mot de passe" aria-label="Mot de passe" required>
                        <span class="input-group-text">&#128273;</span>
                    </div>
                </div>

                <button type="submit" class="btn btn-light btn-lg w-100 btn-signin text-dark">SE CONNECTER</button>

                <div class="d-flex justify-content-between align-items-center mt-3 login-links">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="rememberMe">
                        <label class="form-check-label small" for="rememberMe">
                            Se souvenir de moi
                        </label>
                    </div>
                    <a class="small" href="#">Mot de passe oublié ?</a>
                </div>
            </form>
        </div>
    </div>

    <script src="{{ asset('v2/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
