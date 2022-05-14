<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="css/destinos.css" />
  </head>

  <body>
   <x-nav/>

    <div class="tierra">
      <div class="msgs-diplayed1">
        <div class="buttons">
          <div class="containerButton">
            <h4 class="h4txt">MISSION</h4>
            <h2 class="h2txt">Orbita de la Tierra</h2>
            <a href="#" class="btn effect01" target="_blank">
              <span>Reservar</span></a
            >
          </div>
        </div>
      </div>
    </div>



    <div class="estacion">
        <div class="msgs-diplayed2">
            <div class="buttons">
              <div class="containerButton">
                <h4 class="h4txt">MISSION</h4>
                <h2 class="h2txt">Estación Espacial Internacional</h2>
                <a href="#" class="btn effect01" target="_blank">
                  <span>Reservar</span></a
                >
              </div>
            </div>
          </div>
    </div>


    <div class="luna">
        <div class="msgs-diplayed1">
            <div class="buttons">
              <div class="containerButton">
                <h4 class="h4txt">MISSION</h4>
                <h2 class="h2txt">MOON</h2>
                <a href="#" class="btn effect01" target="_blank">
                  <span>Reservar</span></a
                >
              </div>
            </div>
          </div>
        
    </div>


    <div class="marte">
        <div class="msgs-diplayed2">
            <div class="buttons">
              <div class="containerButton">
                <h4 class="h4txt">MISSION</h4>
                <h2 class="h2txt">Marte</h2>
                <a href="#" class="btn effect01" target="_blank">
                  <span>Reservar</span></a
                >
              </div>
            </div>
          </div>
    </div>


  <x-footer/>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="{{ asset('js/nav.js') }}"></script>
  </body>
</html>
