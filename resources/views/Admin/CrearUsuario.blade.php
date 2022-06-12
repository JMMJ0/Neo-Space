<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/admin.css">
    <title>Document</title>
</head>

<body>

    <x-nav />
    <div class="estilo">
        <form action="{{ route('Admin.NuevoUsuario') }}" method="POST">
            @csrf
            {{ method_field('put') }}
            <h2>Crear Usuario</h2>
            <div class="row">
                <div class="col-25">
                    <label for="name">Introduce el nombre</label>
                </div>
                <div class="col-75">
                    <input type="text" id="name" name="name" placeholder="Name..">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="surname">Introduce el apellido</label>
                </div>
                <div class="col-75">
                    <input type="text" id="surname" name="surname" placeholder="Last name..">
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label for="email">Introduce el email</label>
                </div>
                <div class="col-75">
                    <input type="email" id="email" name="email" placeholder="Email..">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="ciudad_usuario">Introduce la city</label>
                </div>
                <div class="col-75">
                    <input type="text" id="ciudad_usuario" name="ciudad_usuario" placeholder="City..">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="phone_number">Phone</label>
                </div>
                <div class="col-75">
                    <input type="text" id="phone_number" name="phone_number" placeholder="Phone number..">
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label for="role">role</label>
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
                    <input type="password" id="password" name="password" placeholder="Password..">
                </div>
            </div>

            <br>
            <div class="row">
                <input type="submit" value="Crear">
            </div>

        </form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
        <script src="{{ asset('js/nav.js') }}"></script>
</body>

</html>
