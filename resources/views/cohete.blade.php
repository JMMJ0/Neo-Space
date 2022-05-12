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
  <x-nav/>
  <div class="first">
    <div class="title">
      <h1>DRAGON</h1>
      <h3>SENDING HUMANS AND CARGO INTO SPACE</h3>
    </div>
  </div>
  <div class="dragon">
    <div class="info">
      <!-- <table>
          <tbody>
            <tr>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td></td>
            </tr>
          </tbody>
        </table> -->
    </div>
  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <script src="{{ asset('js/nav.js') }}"></script>
</body>

</html>