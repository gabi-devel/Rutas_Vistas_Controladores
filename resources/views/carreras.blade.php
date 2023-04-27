<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Carreras</title>
</head>
<body>
    <div class="container-fluid">
		<h5 class="bg-light border-top py-2">Carreras</h5>
        {{-- <div class="row container">
            <ul class="ps-4 pt-3">
				<li>Receso Invernal: 17/07 al 28/07</li>
			</ul>
        </div> --}}
        @php
        $carreras = [
            "Tecnicatura Superior en Logística",
            "Tecnicatura Superior en Higiene y Seguridad en el Trabajo",
            "Tecnicatura Superior en Mantenimiento Industrial",
            "Tecnicatura Superior en Administración de Recursos Humanos",
            "Tecnicatura Superior en Análisis de Sistemas"
        ];
        @endphp
        <ul id="carreras">
            @foreach ($carreras as $index => $carrera)
                <li><a href="{{ route('carrera', $index) }}">{{ $carrera }}</a></li>
            @endforeach
        </ul>
        <hr>
	</div>

</body>
</html>
