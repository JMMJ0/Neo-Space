<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/admin.css">
    <title>SpaceNeo-Admin</title>
</head>

<body>

    <x-nav />
    <div class="estilo">
        <form action="{{ route('Admin.ActualizarUsuario', $user->id) }}" method="POST">
            @csrf
            {{ method_field('put') }}

            <h2>Editar Usuario</h2>
            <div class="row">
                <div class="col-25">
                    <label for="name">Introduce el nombre</label>
                </div>
                <div class="col-75">
                    <input type="text" id="name" name="name" value={{ $user->name }}>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="surname">Introduce el apellido</label>
                </div>
                <div class="col-75">
                    <input type="text" id="surname" name="surname" value={{ $user->surname }}>
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label for="email">Introduce el email</label>
                </div>
                <div class="col-75">
                    <input type="email" id="email" name="email" value={{ $user->email }}>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="ciudad_usuario">Introduce la city</label>
                </div>
                <div class="col-75">
                    <input type="text" id="ciudad_usuario" name="ciudad_usuario" value={{ $user->ciudad_usuario }}>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="phone_number">Phone</label>
                </div>
                <div class="col-75">
                    <input type="text" id="phone_number" name="phone_number" value={{ $user->phone_number }}>
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label for="role">Elige role del usuario</label>
                </div>
                <div class="col-75">
                    <select id="role" name="role">
                        <option value="admin">Administrador</option>
                        <option value="user">Usuario</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label for="password">Introduce la contrasenia</label>
                </div>
                <div class="col-75">
                    <input type="password" id="password" name="password">
                </div>
            </div>

            <br>
            <div class="row">
                <input type="submit" value="Editar">
            </div>


        </form>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="{{ asset('js/nav.js') }}"></script>
</body>

</html>
