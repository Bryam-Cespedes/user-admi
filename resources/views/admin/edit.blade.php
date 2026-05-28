<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Usuario</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body class="bg-light">

<div class="container mt-5">

    <div class="card shadow">

        <div class="card-header bg-warning">

            <h3>Editar Usuario</h3>

        </div>

        <div class="card-body">

            <form action="{{ route('usuarios.update', $user->id) }}"
                  method="POST">

                @csrf
                @method('PUT')

                <div class="mb-3">

                    <label>Nombre</label>

                    <input type="text"
                           name="name"
                           value="{{ $user->name }}"
                           class="form-control">

                </div>

                <div class="mb-3">

                    <label>Correo</label>

                    <input type="email"
                           name="email"
                           value="{{ $user->email }}"
                           class="form-control">

                </div>

                <div class="mb-3">

                    <label>Rol</label>

                    <select name="role" class="form-select">

                        <option value="usuario"
                        {{ $user->role == 'usuario' ? 'selected' : '' }}>

                            Usuario

                        </option>

                        <option value="admin"
                        {{ $user->role == 'admin' ? 'selected' : '' }}>

                            Admin

                        </option>

                    </select>

                </div>

                <button class="btn btn-success">

                    Actualizar

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