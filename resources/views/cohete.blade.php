<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SpaceNeo</title>

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
            <h3>SENDING HUMANS AND CARGO INTO SPACE</h3>
        </div>
    </div>
    <div class="dragon">
        <div class="info">
            <h3>DRAGON</h3>
            <h2>OVERVIEW</h2>
            <table class="data additional-toggle" style="display: table;">
              <tbody>
                <tr class="js-stagger" style="visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">
                  <td>HEIGHT</td>
                  <td>8.1 m <span>/ 26.7 ft</span></td>
                </tr>
                <tr class="js-stagger" style="visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">
                  <td>DIAMETER</td>
                  <td>4 m <span>/ 13 ft</span></td>
                </tr>
                <tr class="js-stagger" style="visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">
                  <td>CAPSULE VOLUME</td>
                  <td>9.3 m³ <span>/ 328 ft³ </span></td>
                </tr>
                <tr class="js-stagger" style="visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">
                  <td>TRUNK VOLUME</td>
                  <td>37 m³ <span>/ 1300 ft³ </span></td>
                </tr>
                <tr class="js-stagger" style="visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">
                  <td>LAUNCH PAYLOAD MASS</td>
                  <td>6,000 kg <span>/ 13,228 lbs</span></td>
                </tr>
                <tr class="js-stagger" style="visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">
                  <td>RETURN PAYLOAD MASS</td>
                  <td>3,000 kg <span>/ 6,614 lbs</span></td>
                </tr>
              </tbody>
            </table>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

        <script src="{{ asset('js/nav.js') }}"></script>
</body>

</html>
