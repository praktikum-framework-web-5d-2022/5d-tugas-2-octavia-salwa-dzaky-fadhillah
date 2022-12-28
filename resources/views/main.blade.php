<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> {{ $title }} </title>
    <link rel="icon" type="image/x-icon" href="https://img.icons8.com/color/344/globe.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

  @include('partials.navbar')
  <div class="container py-5">
    @yield('container')
  </div>

  <footer class="text-center">
    <p> Octavia Salwa Dzaky Fadhillah </p>
    <p> 2010631170107 </p>
    <p> 5D - Informatika </p>
  </footer>
  
</body>
</html>