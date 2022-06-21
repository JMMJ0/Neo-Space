<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/viaje.css" />
    <title>SpaceNeo-Mis Viajes</title>
</head>

<body>
    <x-nav />

    <div class="viajes">
        <h1>Viajes Reservados</h1>

        @foreach ($viaje as $card)
            <div class="card">

                <div class="card-preview-{{ $card->punto_destino }}">
                    <h6>{{ $card->fecha }}</h6>
                    <h2>{{ $card->punto_destino }}</h2>
                </div>
                <div class="card-info">
                    <h6>{{ $card->compania }}</h6>
                    <h2>{{ $card->punto_salida }} |
                        @php
                            echo substr($card->hora, 0, 5);
                        @endphp

                    </h2>
                    <form id="confirmacion" action="{{route('cancelarViaje', $card->id)}}" method="POST">

                        @csrf
                        {{ method_field('get') }}
                        <button type="button" class="link_rojo">Cancelar Viaje</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
    <x-footer />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="{{ asset('js/nav.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.17/dist/sweetalert2.all.min.js"></script>
    <script src="{{ asset('js/pop-up.js') }}"></script>
</body>

</html>
