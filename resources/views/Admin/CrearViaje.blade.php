<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/admin.css">
    <title>Document</title>
</head>

<body>
    <x-nav />
    <div class="estilo">
        <form action="{{ route('Admin.NuevoViaje') }}" method="POST">
            @csrf
            {{ method_field('put') }}
            <h2>Crear Viaje</h2>

            <div class="row">
                <div class="col-25">
                    <label for="hora">Introduce la hora de salida</label>
                </div>
                <div class="col-75">
                    <input type="time" id="hora" name="hora">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="punto_salida">Introduce la Ciudad de Salida</label>
                </div>
                <div class="col-75">
                    <input type="text" id="punto_salida" name="punto_salida">
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label for="punto_destino">Elige el destino</label>
                </div>
                <div class="col-75">
                    <select id="punto_destino" name="punto_destino">
                        <option value="1">Earth Orbit</option>
                        <option value="2">International Space Station</option>
                        <option value="3">Moon</option>
                        <option value="4">Mars</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="fecha">Introduce la fecha del viaje</label>
                </div>
                <div class="col-75">
                    <input type="date" id="fecha" name="fecha">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="compania">Elige la compania</label>
                </div>
                <div class="col-75">
                    <select id="compania" name="compania">
                        <option value="1">Space X</option>
                        <option value="2">Blue Origin</option>
                        <option value="3">Virgin Galactic</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <input type="submit" value="Crear">
            </div>
        </form>

    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
        <script src="{{ asset('js/nav.js') }}"></script>

</body>

</html>
