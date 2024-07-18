<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('horariosMedicos.css') }}">
    <title>Dentico | Horarios Medicos - @yield('title')</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Otros estilos CSS -->
    <link rel="stylesheet" href="{{ asset('horariosMedicos.css') }}">

</head>

<body>
    <!-- Header -->
    <!--<header style="color: #03a6a6;" class="bg-primary text-white text-center py-3">
        <div class="container">
            <h1>Horarios Médicos</h1>
        </div>
    </header>-->


    <!-- Main Content -->
    <div class="container my-5">
     


        @yield('content')
    </div>

    <!-- Footer -->
    <!--<footer class="bg-dark text-white text-center py-3">
        <div class="container">
            <p>&copy; 2024 Dentico. Todos los derechos reservados.</p>
        </div>
    </footer>-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+0xV5kPgc2ZjJ55mKJkZ5q5Fw5jD" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>
