<!DOCTYPE html>
<html lang="ru"> 
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $titile ?? 'Default title '}}</title>
    <!-- <script src="https://unpkg.com/imask"></script> -->
    <!-- <script defer src="main.js"></script> -->
    $vite('resources/css/main.scss')
   
</head>
</body>
$include('layout.navbar')
$include('layout.footer')
$$yield('content')
</body>
</html>