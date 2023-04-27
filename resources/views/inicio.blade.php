<!DOCTYPE html>
<html>
<head>
	<title>Botones para redirigir</title>
	<!-- Incluye los archivos CSS de Bootstrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
	<div class="container-fluid">
        <div class="row">
            <h5 class="bg-light border-top py-2">Calendario Académico</h5>
            <h6>Inicio y finalización de Cursada por Cuatrimestres</h6>
            <a href="{{route('calendario')}}" class="mb-3">
                <button class="btn btn-primary">Calendario</button>
            </a>
         
            <h5 class="bg-light border-top py-2">Carreras</h5>
            <h6>Oferta Académica 2023</h6>
            <a href="{{route('carreras')}}">
                <button class="btn btn-primary">Carreras</button>
            </a>
        </div>

        <hr>
        {{-- <a href="{{ route('saludar', "nombre") }}">Saludar</a> --}}
	<!-- Incluye los archivos JS de Bootstrap -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.1/js/bootstrap.bundle.min.js"></script>
</body>
</html>
