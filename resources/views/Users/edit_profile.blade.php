<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/css/profile.css" />
    <title>SpaceNeo-Editar Perfil</title>
</head>

<body>
    <x-nav />

    <div class="conjunto">
        <div class="img-info">
            <div>
                <img src="https://bootdey.com/img/Content/avatar/avatar7.png"
                    alt="Admin" class="rounded-circle" width="150" />
            </div>
            <div class="txt">
                <h4>{{ Auth::user()->name }} {{ Auth::user()->surname }}</h4>
                <p>Ciduad de Procedencia: </p>
                <p>{{ Auth::user()->ciudad_usuario }}</p>
                <p>Numero de Viajes Realizados: </p>
                <p>{{$numviajes}}</p>
            </div>
        </div>

        <div class="info-user">
            <form action=" {{route('Users.actualizar-usuario')}}" method="post">
                @csrf
                {{method_field('put')}}
                <div class="row">
                    <div>
                        <h3>Nombre</h3>
                    </div>
                    <div>
                        <input type="text" name="name" class="form-control" value={{ Auth::user()->name }}>
                    </div>
                </div>
                <div class="row">
                    <div>
                        <h3>Apellidos</h3>
                    </div>
                    <div>
                        <input type="text"  name="surname"class="form-control" value={{ Auth::user()->surname }}>
                    </div>
                </div>
                <div class="row">
                    <div>
                        <h3>Email</h3>
                    </div>
                    <div>
                        <input type="email" name="email" class="form-control" value={{ Auth::user()->email }}>
                    </div>
                </div>
                <div class="row">
                    <div>
                        <h3>Ciudad</h3>
                    </div>
                    <div>
                        <input type="text"  name="ciudad_usuario" class="form-control" value={{ Auth::user()->ciudad_usuario }}>
                    </div>
                </div>
                <div class="row">
                    <div>
                        <h3>Numero de teléfono</h3>
                    </div>
                    <div>
                        <input type="number"  name="phone_number" class="form-control" value={{ Auth::user()->phone_number }}>
                    </div>
                </div>
                <button><input id='submit' type="submit" value="SAVE"></button>
            </form>
        </div>

        <div class="viajes">
            <h1>Viajes Realizados</h1>

            @foreach ($viaje as $card)
                <div class="card">

                    <div class="card-preview-{{ $card->punto_destino }}">
                        <h6>{{ $card->fecha }}</h6>
                        <h2>{{ $card->punto_destino }}</h2>
                    </div>
                    <div class="card-info">
                        <h6>{{$card->compania}}</h6>
                        <h2>{{ $card->punto_salida }} |
                            @php
                                echo substr($card->hora, 0, 5);
                            @endphp

                        </h2>
                        <a class="link" href="{{route('Users.MisViajes')}}">Ver todos los viajes</a>
                    </div>
                </div>
            @endforeach

        </div>



    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="{{ asset('js/nav.js') }}"></script>
</body>

</html>
