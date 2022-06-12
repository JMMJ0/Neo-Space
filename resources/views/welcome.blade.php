<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SpaceNeo</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="css/welcome.css">
    {{-- Scripts --}}


</head>

<body class="antialiased">
    <div
        class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('/dashboard') }}"
                        class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                @else
                    @if (Route::has('register'))
                    @endif
                @endauth
            </div>
        @endif

    </div>
    <x-nav />

    <div class="bg1">
        <video src="video\Landing2.mp4" autoplay="true" muted="true" loop="true"></video>
        <div class="msgs-diplayed1">
            <h4 class="h4txt">Descubre Nuestro Nuevo Cohete</h4>
            <h2 class="h2txt">Virgin Galactic ROCKET</h2>
            <div class="buttons">
                <div class="containerButton">
                    <a href="{{ url('cohete') }}" class="btn effect01">
                        <span>Reservar</span></a>
                </div>
            </div>
        </div>
    </div>
    <div class="bg2">
        <div class="msgs-diplayed1">
            <h4 class="h4txt">Atrévete </h4>
            <h2 class="h2txt">Descubre Nuestras Compañias</h2>
            <div class="buttons">
                <div class="containerButton">

                    <a href="{{ url('companies') }}" class="btn effect01">
                        <span>Saber más</span></a>
                </div>
            </div>
        </div>
    </div>
    <div class="bg3">
        <div class="pri">
            <div class="sec">
                <h1>LAUNCH</h1>
                <div class="thr"></div>
                <div class="thr2">
                    <h1>EXPLORA</h1>
                    <p>Descubre nuevos horizontes y lánzate al espacio con los diferentes viajes, ofrecidos por las
                        compañías mas pioneras en el sector que te llevaran a destinos nunca antes imaginados haciendo
                        así de esta experecia única en la vida. Visita la icónica Luna donde el ser humano viajo por
                        primera vez, revive la experiencia vivida por los astronautas del momento en su primera llegada
                        a este satélite</p>
                    <div class="buttons">
                        <div class="containerButton">
                            <a href="{{ url('destinos') }}" class="btn effect01">
                                <span>Saber más</span></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="bg4">
            <figure class="image-block">

                <img src="/img/SpaceSuit.png" alt="SpaceSuit" />
                <figcaption>
                    <h3>Saber Más</h3>
                    <p>
                        Pellentesque habitant morbi tristique senectus et netus et malesuada
                        fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae,
                        ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam
                        egestas semper. Aenean ultricies mi vitae est. Mauris placerat
                        eleifend leo.
                    </p>
                </figcaption>
            </figure>
            <figure class="image-block">

                <img src="/img/viaje2.png" alt="viaje2" />
                <figcaption>
                    <h3>Saber Más</h3>
                    <p>
                        Pellentesque habitant morbi tristique senectus et netus et malesuada
                        fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae,
                        ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam
                        egestas semper. Aenean ultricies mi vitae est. Mauris placerat
                        eleifend leo.
                    </p>
                </figcaption>
            </figure>
            <figure class="image-block">

                <img src="/img/viaje3.png" alt="viaje3" />
                <figcaption>
                    <h3>Saber Más</h3>
                    <p>
                        Pellentesque habitant morbi tristique senectus et netus et malesuada
                        fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae,
                        ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam
                        egestas semper. Aenean ultricies mi vitae est. Mauris placerat
                        eleifend leo.
                    </p>
                </figcaption>
            </figure>
        </div>
        <div class="bg5">
            <img class="bg5-lunas" src="/img/moonPhases.png" alt="lunas" />

            <div class="bg5-txt">
                <h1>FAQS</h1>
                <h2>¿CUÁNDO ES EL PRÓXIMO VIAJE?</h2>
                <p>
                    Los viajes son organizados por las distintas compañias con las que trabajamos, por lo que siempre
                    habrá viajes publicados en la nuestro apartado de destinos.
                </p>
                <h2>¿QUIÉN PILOTA EL COHETE?</h2>
                <p>
                    Nuestros cohetes son pilotados por astronautas profesionales con muchos viajes a sus espaldas por lo
                    que podrá disfrutar del trayecto sin preocupaciones, desde SpaceNeo le recomendamos aventurarse
                    romper los límites y aventurarse en uno de nuestros increibles viajes.
                </p>
                <h2>¿CUÁNTO DURA EL VIAJE?</h2>
                <p>
                    La duración del viaje depende del destino elegido. <br>Nuestro viaje alrededor de la órbita de la
                    Tierra dura unos 130 minutos.<br> El viaje a la Estación Espacial Internacinal tiene una duración de
                    3 horas. <br> El viaje a la Luna dura unas 132 horas lo que equivale a 5.5 días.<br> El viaje a
                    Marte es para los aventureros más intrépidos los cuales recibirán una seria preparación previa al
                    viaje ya que estamos hablando de una media de 26 meses en el espacio por lo que no cualquier persona
                    está capacitada para ello.
                </p>
            </div>
        </div>
        <x-footer />

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
        <script src="{{ asset('js/nav.js') }}"></script>

</body>

</html>
