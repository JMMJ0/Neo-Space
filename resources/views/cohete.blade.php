<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SpaceNeo-Cohetes</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="css/cohete.css">
    {{-- Scripts --}}


</head>

<body>
    <x-nav />
    <div class="first">
        <div class="title">
            <h1>DRAGON</h1>
            <h3>ENVIANDO HUMANOS Y CARGA AL ESPACIO</h3>
        </div>
    </div>
    <div class="dragon">
        <div class="relleno"></div>
        <div class="info">
            <h3>DRAGON</h3>
            <h2> VISTA GENERAL</h2>
            <table class="data additional-toggle" style="display: table;">
                <tbody>
                    <tr class="js-stagger"
                        style="visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">
                        <td>ALTURA</td>
                        <td>8.1 m <span>/ 26.7 ft</span></td>
                    </tr>
                    <tr class="js-stagger"
                        style="visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">
                        <td>DIÁMETRO</td>
                        <td>4 m <span>/ 13 ft</span></td>
                    </tr>
                    <tr class="js-stagger"
                        style="visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">
                        <td>VOLUMEN DE LA CÁPSULA</td>
                        <td>9.3 m³ <span>/ 328 ft³ </span></td>
                    </tr>
                    <tr class="js-stagger"
                        style="visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">
                        <td>VOLUMEN DEL MALETERO</td>
                        <td>37 m³ <span>/ 1300 ft³ </span></td>
                    </tr>
                    <tr class="js-stagger"
                        style="visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">
                        <td>MASA DE CARGA DE LANZAMIENTO</td>
                        <td>6,000 kg <span>/ 13,228 lbs</span></td>
                    </tr>
                    <tr class="js-stagger"
                        style="visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">
                        <td>MASA DE CARGA ÚTIL DE RETORNO</td>
                        <td>3,000 kg <span>/ 6,614 lbs</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="second">
        <div class="title2 reveal">
            <h1>Blue Origin HLS</h1>
            <h3>HUMAN LANDING SYSTEM</h3>
        </div>
        <div class="description reveal">
            <h4>
                El Programa Artemis de la NASA tiene un desafío audaz para llevar a la primera mujer y al próximo hombre
                a la Luna: devolver a los estadounidenses a la superficie lunar, abrir la Luna para los negocios y
                construir un camino a Marte. Para lograr estos ambiciosos objetivos, la NASA lanzó una solicitud para
                que la industria desarrolle la pieza final de su arquitectura lunar Artemis, el Sistema de aterrizaje
                humano (HLS). El Equipo Nacional integra cuatro empresas, cada una con una ventaja inicial para este
                programa de ritmo acelerado.
            </h4>
        </div>
    </div>

    <div class="third">
        <div class="title2 reveal">
            <h1>Blue Origin-Blue MOON</h1>
            <h3>HUMAN LANDING SYSTEM</h3>
            <h4>
                Blue Moon es un módulo de aterrizaje flexible que entrega una amplia variedad de cargas útiles pequeñas,
                medianas y grandes a la superficie lunar. Ya sea carga o tripulación, su capacidad para proporcionar
                aterrizajes precisos y suaves permitirá una presencia humana sostenida en la Luna.
            </h4>
        </div>
    </div>

    <div class="fourth">
        <video src="/video/Chapter_2.mp4" muted="true" autoplay="true" loop="true"></video>
        <div class="title2 reveal">
            <h1>Virgin Galactic-Rocket</h1>
            <h4>
                Su viaje de 90 minutos comienza con un despegue suave de la pista, ya que nuestro
                nave espacial, unida a la nave nodriza, asciende hacia los cielos. Nuestro
                El sistema de vuelo espacial utiliza un lanzamiento aéreo, lo que significa que su viaje a
                la altitud de liberación es tranquila y agradable.
            </h4>
        </div>
    </div>

    <div class="footer">
        <img src="/svg/logoBlack.svg" alt="SpaceNeo" />
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="{{ asset('js/text-animation.js') }}"></script>
    <script src="{{ asset('js/nav.js') }}"></script>
</body>

</html>
