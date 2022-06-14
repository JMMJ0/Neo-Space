<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/companies.css">
    <title>SpaceNeo-Compañias</title>
</head>

<body>
    
<x-nav/>
    <div class="one">

        <div class="inf">
            <h1>SOBRE SPACE X</h1>
            <h3>SpaceX ha ganado la atención mundial por una serie de hitos históricos. es el unico privado
                compañía capaz de devolver una nave espacial desde la órbita terrestre baja, y en 2012 nuestra nave espacial Dragon se convirtió en
                la primera nave espacial comercial en entregar carga hacia y desde la Estación Espacial Internacional. Y en
                2020, SpaceX se convirtió en la primera empresa privada en llevar humanos allí también</h3>
        </div>
    </div>


    <div id="two" class="two ">
        <iframe id="BO" width="560" height="315" src="https://www.youtube.com/embed/1YOL89kY8Og"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>
        <button id="cierra" class="noselect"><span class='text'>Close</span><span class="icon"><svg
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path
                        d="M24 20.188l-8.315-8.209 8.2-8.282-3.697-3.697-8.212 8.318-8.31-8.203-3.666 3.666 8.321 8.24-8.206 8.313 3.666 3.666 8.237-8.318 8.285 8.203z" />
                </svg></span>
        </button>
        <div class="inf reveal">
            <h1>SOBRE BLUE ORIGIN</h1>
            <h3>Estamos comprometidos a construir un camino al espacio para que nuestros hijos puedan construir el futuro.</h3>
            <h3 class=""> Aprenda sobre nuestra misión</h3>
            <div class="thevideo">
                <div class="btn-position-bo">
                    <button id="playBO">&#9658;</button>
                </div>
            </div>

        </div>
    </div>

    <div class="three">
        <video src="video/vgBG.mp4" poster="img/coverVG.jpeg" id="myvideo"></video>
        <div class="txt-cont">
            <div class="thevideo">
                <div id="inf2" class="inf reveal">
                    <h1>SOBRE VIRGIN GALACTIC</h1>
                    <h3>Somos la primera línea espacial comercial del mundo, y nuestro propósito es conectar a las personas a través
                        el mundo al amor, la maravilla y el asombro creados por los viajes espaciales</h3>
                </div>
                <div class="btn-position">
                    <button id="playVG">&#9658;</button>
                </div>
            </div>
        </div>
    </div>


    <x-footer />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="{{ asset('js/nav.js') }}"></script>
    <script src="{{ asset('js/btn-video.js') }}"></script>
    <script src="{{ asset('js/text-animation.js') }}"></script>
</body>

</html>
