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
        <div class="msgs-diplayed1">
            <div class="buttons">
                <div class="containerButton">
                    <h4 class="h4txt">NEW HAWK Q7</h4>
                    <h2 class="h2txt">MISSION QUEST 21</h2>
                    <a href="#" class="btn effect01" target="_blank">
                        <span>Reservar</span></a>
                </div>
            </div>
        </div>
    </div>
    <div class="bg2">
        <div class="msgs-diplayed1">
            <div class="buttons">
                <div class="containerButton">
                    <h4 class="h4txt">NEW HAWK Q7</h4>
                    <h2 class="h2txt">MISSION QUEST 21</h2>
                    <a href="#" class="btn effect01" target="_blank">
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
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime provident qui corrupti
                        doloremque sapiente
                        quae voluptatum et consectetur autem voluptates accusamus iure, quidem veniam, voluptatibus
                        tenetur aperiam
                        est iste. Sunt! Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae iure assumenda
                        molestias,
                        rem ipsum laboriosam doloremque! Natus consectetur vero soluta, ipsam incidunt optio, inventore
                        aut rerum
                        blanditiis beatae nihil tenetur!</p>
                    <div class="buttons">
                        <div class="containerButton">
                            <a href="#" class="btn effect01" target="_blank">
                                <span>Saber más</span></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="bg4">
            <figure class="image-block">
                {{-- <h1>The Beach</h1> --}}
                <img src="/img/viaje1.png" alt="viaje1" />
                <figcaption>
                    <h3>More Info</h3>
                    <p>
                        Pellentesque habitant morbi tristique senectus et netus et malesuada
                        fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae,
                        ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam
                        egestas semper. Aenean ultricies mi vitae est. Mauris placerat
                        eleifend leo.
                    </p>
                    <button>More Info</button>
                </figcaption>
            </figure>
            <figure class="image-block">
                {{-- <h1>The Beach</h1> --}}
                <img src="/img/viaje2.png" alt="viaje2" />
                <figcaption>
                    <h3>More Info</h3>
                    <p>
                        Pellentesque habitant morbi tristique senectus et netus et malesuada
                        fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae,
                        ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam
                        egestas semper. Aenean ultricies mi vitae est. Mauris placerat
                        eleifend leo.
                    </p>
                    <button>More Info</button>
                </figcaption>
            </figure>
            <figure class="image-block">
                {{-- <h1>The Beach</h1> --}}
                <img src="/img/viaje3.png" alt="viaje3" />
                <figcaption>
                    <h3>More Info</h3>
                    <p>
                        Pellentesque habitant morbi tristique senectus et netus et malesuada
                        fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae,
                        ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam
                        egestas semper. Aenean ultricies mi vitae est. Mauris placerat
                        eleifend leo.
                    </p>
                    <button>More Info</button>
                </figcaption>
            </figure>
        </div>
        <div class="bg5">
            <img class="bg5-lunas" src="/img/moonPhases.png" alt="lunas" />

            <div class="bg5-txt">
                <h1>FAQS</h1>
                <h2>¿CUÁNDO ES EL PRÓXIMO VIAJE?</h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis
                    eius neque provident dolorem autem, et assumenda pariatur laudantium
                    voluptate, vero voluptatum delectus expedita deleniti reiciendis culpa
                    necessitatibus, totam architecto quas!
                </p>
                <h2>¿QUIÉN PILOTA EL COHETE?</h2>
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nihil,
                    facere ex optio repudiandae ullam veritatis eaque nam illo iure, id
                    fuga dolor quia fugit, debitis excepturi adipisci harum est
                    architecto.
                </p>
                <h2>¿CUÁNTO DURA EL VIAJE?</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. At soluta
                    sed officia aliquid porro similique sapiente doloremque sunt dolore et
                    assumenda beatae ad, voluptas facere odio, commodi vero, non debitis!
                </p>
            </div>
        </div>
        <div class="footer">
            <img src="/svg/logoBlack.svg" alt="SpaceNeo" />
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

        <script src="{{ asset('js/nav.js') }}"></script>

</body>

</html>
