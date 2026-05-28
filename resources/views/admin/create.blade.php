<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Usuario</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body class="bg-light">

<div class="container mt-5">

    <div class="card shadow">

        <div class="card-header bg-primary text-white">

            <h3>Crear Usuario</h3>

        </div>

        <div class="card-body">

            <form action="{{ route('usuarios.store') }}" method="POST">

                @csrf

                <div class="mb-3">

                    <label>Nombre</label>

                    <input type="text"
                           name="name"
                           class="form-control">

                </div>

                <div class="mb-3">

                    <label>Correo</label>

                    <input type="email"
                           name="email"
                           class="form-control">

                </div>

                <div class="mb-3">

                    <label>Contraseña</label>

                    <input type="password"
                           name="password"
                           class="form-control">

                </div>

                <div class="mb-3">

                    <label>Rol</label>

                    <select name="role" class="form-select">

                        <option value="usuario">
                            Usuario
                        </option>

                        <option value="admin">
                            Admin
                        </option>

                    </select>

                </div>

                <button class="btn btn-success">

                    Guardar

                </button>

                <a href="/usuarios" class="btn btn-secondary">

                    Volver

                </a>

            </form>

        </div>

    </div>

</div>

</body>
</html>