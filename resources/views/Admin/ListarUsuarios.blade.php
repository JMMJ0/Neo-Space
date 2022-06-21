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
    <div class="create-btn">
        <a href="{{ route('Admin.CrearUsuario') }}">Crear Usuario +</a>
    </div>
    <div class="cnt-table">

        <ul class="responsive-table">
            <li class="table-header">
                <div class="col col-1"> Id</div>
                <div class="col col-2">Nombre</div>
                <div class="col col-3">Apellido</div>
                <div class="col col-4">Email</div>
                <div class="col col-5">Número de Teléfono</div>
                <div class="col col-6">Ciudad</div>
                <div class="col col-7">Acciones</div>
            </li>
            @foreach ($user as $usuario)
                <li class="table-row">
                    <div class="col col-1" data-label="ID">{{ $usuario->id }}</div>
                    <div class="col col-2" data-label="Nombre">{{ $usuario->name }}</div>
                    <div class="col col-3" data-label="Apellido">{{ $usuario->surname }}</div>
                    <div class="col col-4" data-label="Email">{{ $usuario->email }}</div>
                    <div class="col col-5" data-label="Número de Teléfono">{{ $usuario->phone_number }}</div>
                    <div class="col col-6" data-label="Ciudad">{{ $usuario->ciudad_usuario }}</div>
                    <div class="col col-7" data-label="Acciones">


                        <a href="{{ route('Admin.EditarUsuarios', $usuario->id) }}">EDITAR</a>


                        <form id="confirmacion" action="{{ route('Admin.borrarUsuario', $usuario->id) }}" method="post">
                            @csrf
                            {{ method_field('delete') }}
                            <input class="borrar" type="button" value="BORRAR">
                        </form>

                    </div>
                </li>
            @endforeach

        </ul>
    </div>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="{{ asset('js/nav.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.17/dist/sweetalert2.all.min.js"></script>
    <script src="{{ asset('js/pop-up.js') }}"></script>

</body>

</html>
