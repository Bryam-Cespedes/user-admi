<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Panel Administrador</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body class="bg-light">

<div class="container mt-5">

    <div class="card shadow">

        <div class="card-header bg-dark text-white d-flex justify-content-between">

            <h3>Panel Administrador</h3>

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button class="btn btn-danger">
                    Cerrar sesión
                </button>
            </form>

        </div>

        <div class="card-body">

            <a href="{{ route('usuarios.create') }}"
               class="btn btn-primary mb-3">

                Crear Usuario

            </a>

            <table class="table table-bordered table-hover">

                <thead class="table-dark">

                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>Rol</th>
                        <th>Acciones</th>
                    </tr>

                </thead>

                <tbody>

                    @foreach($users as $user)

                    <tr>

                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>

                            @if($user->role == 'admin')

                                <span class="badge bg-danger">
                                    Admin
                                </span>

                            @else

                                <span class="badge bg-primary">
                                    Usuario
                                </span>

                            @endif

                        </td>

                        <td>

                            <a href="{{ route('usuarios.edit', $user->id) }}"
                               class="btn btn-warning btn-sm">

                               Editar

                            </a>

                            <form action="{{ route('usuarios.destroy', $user->id) }}"
                                  method="POST"
                                  class="d-inline">

                                @csrf
                                @method('DELETE')

                                <button class="btn btn-danger btn-sm">

                                    Eliminar

                                </button>

                            </form>

                        </td>

                    </tr>

                    @endforeach

                </tbody>

            </table>

        </div>

    </div>

</div>

</body>
</html>