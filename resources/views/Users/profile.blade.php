<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/css/profile.css" />
    <title>SpaceNeo-Mi Perfil</title>
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
            <div class="row">
                <div>
                    <h3>Nombre</h3>
                </div>
                <div>
                    <h4>{{ Auth::user()->name }}</h4>
                </div>
            </div>
            <div class="row">
                <div>
                    <h3>Apellidos</h3>
                </div>
                <div>
                    <h4>{{ Auth::user()->surname }}</h4>
                </div>
            </div>
            <div class="row">
                <div>
                    <h3>Email</h3>
                </div>
                <div>
                    <h4>{{ Auth::user()->email }}</h4>
                </div>
            </div>
            <div class="row">
                <div>
                    <h3>Ciudad</h3>
                </div>
                <div>
                    <h4>{{ Auth::user()->ciudad_usuario }}</h4>
                </div>
            </div>
            <div class="row">
                <div>
                    <h3>Número de teléfono</h3>
                </div>
                <div>
                    <h4>{{ Auth::user()->phone_number }}</h4>
                </div>
            </div>

            <button><a href="{{route('Users.edit_profile')}}">EDITAR</a></button>
        </div>

        <div class="viajes">
            <h1>Ultimos Viajes</h1>

            @foreach ($viaje as $card)
                <div class="card">

                    <div class="card-preview-{{ $card->punto_destino }}">
                        <h6>{{ $card->fecha }}</h6>
                        <h2>{{ $card->punto_destino}}</h2>
                    </div>
                    <div class="card-info">
                        <h6>{{$card->compania}}</h6>
                        <h2>{{ $card->punto_salida}} |
                            @php
                             echo substr( $card->hora,0,5)
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
