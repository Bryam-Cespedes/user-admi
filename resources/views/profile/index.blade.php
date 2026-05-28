<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Perfil Usuario</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body class="bg-light">

<div class="container mt-5">

    <div class="card shadow">

        <div class="card-header bg-primary text-white d-flex justify-content-between">

            <h3>Perfil Usuario</h3>

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button class="btn btn-danger">
                    Cerrar sesión
                </button>
            </form>

        </div>

        <div class="card-body">

            <h4 class="mb-3">
                Bienvenido {{ auth()->user()->name }}
            </h4>

            <p>
                <strong>Correo:</strong>
                {{ auth()->user()->email }}
            </p>

            <p>
                <strong>Rol:</strong>
                {{ auth()->user()->role }}
            </p>

        </div>

    </div>

</div>

</body>
</html>