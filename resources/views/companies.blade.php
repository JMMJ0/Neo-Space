<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/companies.css">
    <title>Document</title>
</head>

<body>
    
<x-nav/>
    <div class="one">

        <div class="inf">
            <h1>ABOUT SPACE X</h1>
            <h3>SpaceX has gained worldwide attention for a series of historic milestones. It is the only private
                company capable of returning a spacecraft from low-Earth orbit, and in 2012 our Dragon spacecraft became
                the first commercial spacecraft to deliver cargo to and from the International Space Station. And in
                2020, SpaceX became the first private company to take humans there as well</h3>
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
            <h1>ABOUT BLUE ORIGIN</h1>
            <h3>We're committed to building a road to space so our children can build the future</h3>
            <h3 class="">Learn About Our Mission</h3>
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
                    <h1>ABOUT VIRGIN GALACTIC</h1>
                    <h3>We are the worlds first commercial spaceline, and our purpose is to connect people across
                        the globe to the love, wonder and awe created by space travel</h3>
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
