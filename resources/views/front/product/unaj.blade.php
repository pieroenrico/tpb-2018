@extends('layouts.app')

@section('header')
    @include('partials.header')
@endsection

@section('content')

    <!-- content
   ================================================== -->
    <section id="content-wrap" class="blog-single">
        <div class="row">
            <div class="col-twelve">

                <article class="format-gallery">


                    <div class="content-media">
                        <div class="post-thumb">
                            <img src="{{ asset('images/products/galleries/unaj/eastindian.jpg') }}">
                        </div>
                    </div>

                    <div class="primary-content">

                        <h1 class="entry-title">Videojuegos de uso universitario</h1>

                        <ul class="entry-meta">
                            <li class="date">2012</li>
                            <li class="cat"><a href="">Plataforma, desarrollado para la Universisdad Nacional Arturo Jauretche</a></li>
                        </ul>

                        <div class="quote">
                            <p class="lead" >Reducido a su esencia formal, un juego es una actividad entre dos o más personas con capacidad para tomar decisiones que buscan alcanzar unos objetivos dentro de un contexto limitado. Una definición más convencional es aquella en la que un juego es un contexto con reglas entre adversarios que intentan conseguir objetivos. Nos interesan los juegos serios porque tienen un propósito educativo explícito y cuidadosamente planeado, y porque no están pensados para ser jugados únicamente por diversión.</p>
                            <quote>Clark Abt, Serious Games, 1970, Viking Press</quote>
                        </div>


                    </div>

                    <div class="primary-content">

                        <p>El lenguaje de los videojuegos propone el desarrollo de caminos alternativos en la
                            resolución de los problemas al mismo tiempo que ofrece un buen entorno para experimentar,
                            producir hipótesis y ponerlas a prueba. Opera sobre un terreno multimodal en el cual se
                            comprende no solamente a partir de palabras o textos, sino de acciones, imágenes y
                            sonidos.</p>

                        <p>Sobre estos supuestos realizamos un relevamiento de videojuegos disponibles en el mercado,
                            poniéndolos en relación con los campos disciplinares que atiende la oferta académica de
                            la Universidad Nacional Arturo Jauretche, con la expectativa de producir puntos de
                            intersección entre el tipo de destrezas y competencias que pueden ayudar a desarrollar los
                            videojuegos y algunos campos disciplinares.</p>


                        <p><img src="{{ asset('images/products/galleries/unaj/emergency4.jpg') }}" class="img-fluid"></p>

                        <p>Cabe aclarar que gran parte de los materiales seleccionados se encuadran dentro de un
                            género particular de videojuegos, los llamados Serious Games, que son diseñados con
                            propósitos que traspasan el puro entretenimiento, y suelen abordar temas sociales,
                            económicos, de investigación científica, gestión de emergencias, asistencia sanitaria,
                            planificación urbana, ingeniería, cuestiones religiosas y políticas, entre otras.</p>

                        <p>Nuestra hipótesis es que los videojuegos seleccionados permiten trabajar las destrezas
                            enunciadas, y que lo hacen sobre campos de conocimiento afines a las carreras desarrolladas
                            en la UNAJ. Un análisis en profundidad con los equipos docentes permitirá realizar una
                            selección más precisa, con el fin de evaluar la pertinencia y solidez de los contenidos
                            propuestos por los mismos.</p>


                    </div>

                </article>


            </div> <!-- end col-twelve -->
        </div> <!-- end row -->

    </section> <!-- end content -->

@endsection