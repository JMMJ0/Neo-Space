<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/viaje.css" />
    <title>Document</title>
</head>

<body>
    <x-nav />

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
                </div>
            </div>
        @endforeach
    </div>
    <x-footer />
</body>

</html>
