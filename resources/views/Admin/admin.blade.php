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

    <div class="enlaces">
        <div class="enlace">
            <h1><a class="uno" href="{{ route('Admin.ListarUsuarios') }}">Lista de usuarios</a> </h1>
        </div>
        <div class="enlace">
            <h1><a class="dos" href="{{ route('Admin.CrearUsuario') }}">Crear Usuario</a></h1>
        </div>
        <div class="enlace">
            <h1><a class="tres" href="{{ route('Admin.ListarViajes') }}">Listar Viajes</a></h1>
        </div>
        <div class="enlace">
            <h1><a class="cuatro" href="{{ route('Admin.CrearViaje') }}">Crear Viaje</a></h1>
        </div>



    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
        <script src="{{ asset('js/nav.js') }}"></script>

</body>

</html>
