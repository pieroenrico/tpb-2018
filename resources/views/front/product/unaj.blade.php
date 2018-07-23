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

                        <p>Un rasgo particular de nuestra época es la intensidad de las experiencias en el uso de las
                            nuevas tecnologías. Niños, jóvenes y adultos, estamos sometidos a un bombardeo inacabable
                            de información y de ofertas de entretenimiento en clave tecnológica.</p>
                        <p>Dentro de este panorama suelen escucharse cada vez con más fuerza algunas advertencias: si
                            bien a primera vista las nuevas generaciones disponen de cierto tipo de destrezas para
                            manejarse en los medios digitales y sus múltiples ofertas, esta familiaridad suele encubrir
                            también un bajo dominio de los mismos, sin encuadres conceptuales que ayuden a ordenar y
                            jerarquizar la enorme cantidad de estímulos diarios con los que interactúan. Este rasgo no
                            sería privativo de los jóvenes con poca inmersión en los sistemas educativos, sino que
                            implica a jóvenes de distintos sectores sociales, y cuando se argumenta en relación con el
                            fenómeno suele atribuirse a cierta “opulencia informativa y de recursos de información”,
                            al decir de García Canclini, que también diferencia entre un “estar entretenido” o
                            alfabetizado en los mundos digitales.</p>
                        <p>Por otra parte, desde los ámbitos educativos viene insistiéndose sobre la necesidad de
                            articular procesos de formación para los jóvenes que atiendan tanto a los imperativos
                            sociales de la hora, como a las demandas de los diversos campos disciplinares, y a las
                            prácticas sociales en las que están involucrados generacionalmente. En este sentido, la
                            inclusión de videojuegos para acompañar segmentos de la formación profesional puede
                            achicar la brecha entre las prácticas culturales de los alumnos y las experiencias que se
                            les ofrecen desde la universidad.</p>
                        <p><img src="{{ asset('images/products/galleries/unaj/emergency4.jpg') }}" class="img-fluid"></p>
                        <p>Si atendemos a datos ofrecidos por la Asociación Argentina de Desarrolladores de
                            Videojuegos en 2006, 300.000 jugadores asistían a 20.000 cibercafés en Argentina, y puede
                            inferirse que la franja etaria de dicha población coincide generacionalmente con la
                            población estudiantil de la UNAJ, y que si no se trata de prácticas actuales, seguramente
                            forman parte de las experiencias que han tenido.</p>
                        <p>Sin plantear una subordinación demagógica a los consumos culturales dominantes, se trata
                            de explorar los usos de estos lenguajes en relación con propósitos formativos. Al mismo
                            tiempo, que los ámbitos educativos recojan estas experiencias no formales de los
                            estudiantes, tiene efectos sobre la posición desde la cual los jóvenes interactúan con
                            las tecnologías, en tanto estas pueden ser examinadas críticamente y exploradas desde
                            otras lógicas.</p>
                        <p>En esta dirección hemos realizado un relevamiento de videojuegos disponibles en el mercado,
                            poniéndolos en relación con los campos disciplinares que atiende la oferta académica de
                            la Universidad, con la expectativa de producir puntos de intersección entre el tipo de
                            destrezas y competencias que pueden ayudar a desarrollar los videojuegos y algunos campos
                            disciplinares.</p>
                        <p>Cabe aclarar que gran parte de los materiales seleccionados se encuadran dentro de un
                            género particular de videojuegos, los llamados Serious Games, que son diseñados con
                            propósitos que traspasan el puro entretenimiento, y suelen abordar temas sociales,
                            económicos, de investigación científica, gestión de emergencias, asistencia sanitaria,
                            planificación urbana, ingeniería, cuestiones religiosas y políticas, entre otras.</p>
                        <p><img src="{{ asset('images/products/galleries/unaj/foldit.jpg') }}" class="img-fluid"></p>
                        <p>El tipo de interacciones que proponen los videojuegos están vinculadas con la ejecución de
                            acciones de acuerdo con determinadas reglas. En dichas interacciones el jugador descubre
                            estructuras y los modelos conceptuales sobre los que el videojuego está construido. La
                            interacción con los elementos disponibles en un videojuego supone un proceso de
                            decodificación, análisis y jerarquización de elementos, sumado a la imagen, el sonido y
                            la posibilidad de obtener un feedback de las acciones que se realizan.</p>
                        <p>Por otra parte, el lenguaje de los videojuegos propone el desarrollo de caminos alternativos
                            en la resolución de los problemas al mismo tiempo que ofrece un buen entorno para
                            experimentar, producir hipótesis y ponerlas a prueba. Opera sobre un terreno multimodal en
                            el cual se comprende no solamente a partir de palabras o textos, sino de acciones, imágenes
                            y sonidos.</p>
                        <p>Nuestra hipótesis es que los videojuegos seleccionados permiten trabajar las destrezas
                            enunciadas, y que lo hacen sobre campos de conocimiento afines a las carreras desarrolladas
                            en la UNAJ. Un análisis en profundidad con los equipos docentes permitirá realizar una
                            selección más precisa, con el fin de evaluar la pertinencia y solidez de los contenidos
                            propuestos por los mismos.</p>
                    </div>

                </article>


            </div> <!-- end col-twelve -->
        </div> <!-- end row -->

    </section> <!-- end content -->

@endsection