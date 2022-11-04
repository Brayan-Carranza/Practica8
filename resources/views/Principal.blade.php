@extends('welcome')

@section('contenido')

    <div class="card-group cartas">
        <div class="card cartas2">
            <img src="{{ URL::asset('IM4.jpg') }} " class="img-fluid" style="width: 900px; height: 400px">
            <div class="card-body">
                <h5 class="card-title">Calaveritas literarias: ¿qué son y cómo escribirlas?</h5>
                <p class="card-text">Aquí te presentamos algunos datos para conocer y participar de una exposición.</p>
                <a href="https://netnoticias.mx/juarez/calaveritas-literarias-que-son-y-como-escribirlas/">
                    <p class="card-text"><small class="text-muted">CONOCER MÁS...</small></p>
                </a>
            </div>
        </div>

        <div class="card cartas2">
            <img src="{{ URL::asset('IM1.jpg') }}" class="img-fluid" style="width: 900px; height: 400px">
            <div class="card-body">
                <h5 class="card-title">Día de Muertos en México: cuál es el origen de las calaveritas literarias</h5>
                <p class="card-text">En medio de las celebraciones por el Dia de Muertos, es valioso recordar la historia y
                    origen de las calaveritas literarias y como se hace hoy en día.</p>
                <a href="https://www.tvazteca.com/aztecanoticias/dia-muertos-calaveritas-literarias-como-hacer-capg">
                    <p class="card-text"><small class="text-muted">CONOCER MAS</small></p>
                </a>
            </div>
        </div>
        <div class="card cartas2">
            <img src="{{ URL::asset('M3.jpg') }}" class="img-fluid" style="width: 900px; height: 400px">
            <div class="card-body">
                <h5 class="card-title">Calaveritas literarias para maestros 2022</h5>
                <p class="card-text">Las calaveritas literarias para maestros son una gran tradición, ya que los alumnos
                    suelen bromear en esta temporada de Día de Muertos con sus profesores haciendo rimas y riéndose de la
                    muerte.</p>
                <a
                    href="https://laverdadnoticias.com/estiloyvida/Calaveritas-literarias-para-maestros-2022-20221023-0125.html">
                    <p class="card-text"><small class="text-muted">CONOCER MÁS... </small></p>
                </a>
            </div>
        </div>
    </div>

@stop
