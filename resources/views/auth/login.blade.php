<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body style="
background: linear-gradient(to right, #1e3c72, #2a5298);
height: 100vh;
display: flex;
justify-content: center;
align-items: center;
">

<div class="card shadow p-4"
     style="width: 400px;
            border-radius: 20px;">

    <div class="text-center mb-4">

        <h1 class="fw-bold text-primary">
            USER-ADMI
        </h1>

        <h5 class="text-secondary">
            Sistema de Administración
        </h5>

        <hr>

        <p class="fw-bold">
            Bryam Villa
        </p>

    </div>

    <form method="POST" action="{{ route('login') }}">

        @csrf

        <div class="mb-3">

            <label class="form-label">
                Correo Electrónico
            </label>

            <input type="email"
                   name="email"
                   class="form-control"
                   required>

        </div>

        <div class="mb-3">

            <label class="form-label">
                Contraseña
            </label>

            <input type="password"
                   name="password"
                   class="form-control"
                   required>

        </div>

        <div class="d-grid">

            <button class="btn btn-primary">

                Iniciar Sesión

            </button>

        </div>

    </form>

    <hr>

    <div class="text-center">

        <a href="{{ route('register') }}"
           class="text-decoration-none">

            Crear cuenta

        </a>

    </div>

</div>

</body>
</html>