<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Registro</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body style="
background: linear-gradient(to right, #141e30, #243b55);
height: 100vh;
display: flex;
justify-content: center;
align-items: center;
">

<div class="card shadow p-4"
     style="width: 450px;
            border-radius: 20px;">

    <div class="text-center mb-4">

        <h1 class="fw-bold text-primary">
            Registro Usuario
        </h1>

        <hr>

    </div>

    <form method="POST" action="{{ route('register') }}">

        @csrf

        <div class="mb-3">

            <label>Nombre</label>

            <input type="text"
                   name="name"
                   class="form-control"
                   required>

        </div>

        <div class="mb-3">

            <label>Correo</label>

            <input type="email"
                   name="email"
                   class="form-control"
                   required>

        </div>

        <div class="mb-3">

            <label>Contraseña</label>

            <input type="password"
                   name="password"
                   class="form-control"
                   required>

        </div>

        <div class="mb-3">

            <label>Confirmar Contraseña</label>

            <input type="password"
                   name="password_confirmation"
                   class="form-control"
                   required>

        </div>

        <div class="d-grid">

            <button class="btn btn-success">

                Registrarse

            </button>

        </div>

    </form>

    <hr>

    <div class="text-center">

        <a href="{{ route('login') }}"
           class="text-decoration-none">

            Volver al Login

        </a>

    </div>

</div>

</body>
</html>