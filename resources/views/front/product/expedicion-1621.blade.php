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
                            <img src="{{ asset('images/products/galleries/cnj/cnj-cover.jpg') }}" class="img-fluid">
                        </div>
                    </div>

                    <div class="primary-content">

                        <h1 class="entry-title">Expedición 16|21</h1>

                        <ul class="entry-meta">
                            <li class="date">En producción</li>
                            <li class="cat"><a href="">Videojuego</a></li>
                        </ul>

                        <p class="lead"><strong>Expedición 16|21</strong> es un juego que te permite experimentar el trabajo de un arqueólogo,
                            un ejercicio de interpretación e intuición a partir de elementos concretos que forman parte de una investigación real.
                        </p>


                        <p>Partimos de la idea de que la investigación arqueológica es una interpretación. En este
                            sentido, una interpretación es una imagen fuera de foco: no se trata de un documento fiel,
                            sino de un punto de partida, que puede abarcar muchas preguntas y de ese modo dar lugar a
                            diferentes hipótesis. A mayor cantidad de preguntas, más fuerte se vuelve la
                            investigación.</p>

                        <p>El trabajo arqueológico se complementa con otras disciplinas como la historia, la
                            antropología, la zoología y la química, cada una nos aporta un enfoque diferente a partir de
                            los elementos encontrados y analizados. Es importante tener información clara acerca de cada
                            evidencia, por eso es necesario apoyarse en disciplinas específicas para analizarla.</p>

                        <p>El objetivo del juego es “imaginar posibles”. Cuantos más datos se tienen para
                            contextualizar, mejor se piensa. Así pensado, el trabajo científico no es una tarea
                            solitaria sino colectiva: los datos no hablan por sí mismos, sino que hablan cuando se los
                            cruza con distintos marcos teóricos. A partir de estos cruces, la idea es producir una
                            experiencia en el jugador, la experiencia de generar distintas hipótesis a partir de los
                            elementos disponibles en la investigación arqueológica.</p>

                        <p>El juego toma como punto de partida el trabajo de campaña, que es la instalación que hacen
                            los arqueólogos en el terreno que se va a analizar. La hipótesis irá tomando forma o mutará
                            en función de los datos que arrojen los elementos observados.</p>

                        <p class="text-center"><iframe src="https://player.vimeo.com/video/112387324" width="950" height="534" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></p>

                        <h3 class="entry-title add-bottom">Sobre la historia de Ciudad del Nombre de Jesús</h3>

                        <p>El proceso de conquista y colonización de América comenzó en 1492 con la llegada de
                            Cristobal Colón. A partir de ese momento, España se erigió como la mayor potencia mundial,
                            seguida por Portugal y el Imperio Británico.</p>

                        <p>En 1579 la corona española encargó al capitán Pedro Sarmiento de Gamboa la exploración y
                            fortificación del Estrecho de Magallanes, paso estratégico entre el Atlántico y el Pacífico,
                            con el fin de proteger la región del mayor enemigo de España, el Imperio Británico.</p>

                        <p>Dos años más tarde, una tripulación de 3000 personas distribuidas en 23 navíos partió hacia
                            el Estrecho de Magallanes. El viaje se demoró unos 3 años, producto de las paradas en
                            distintos puertos e incursiones fallidas debido a las inclemencias del clima y del mar.
                            Durante ese trayecto una gran parte de la tripulación perdió la vida. Solo 300 personas
                            arribaron a destino y Pedro Sarmiento de Gamboa fundó Ciudad del Nombre de Jesús, la colonia
                            española más austral de América.</p>

                        <p>Tres años después, solo un puñado de pobladores permanecían con vida. La colonia había
                            fracasado. La región parecía maldita.</p>


                    </div>

                    <div class="content-media">
                        <div class="post-slider flexslider" style="width:800px !important; margin: 60px auto;">
                            <ul class="slides">
                                <li><img src="{{ asset('images/products/galleries/cnj/06-screen.jpg') }}"></li>
                                <li><img src="{{ asset('images/products/galleries/cnj/05-screen.jpg') }}"></li>
                                <li><img src="{{ asset('images/products/galleries/cnj/01-screen.jpg') }}"></li>
                                <li><img src="{{ asset('images/products/galleries/cnj/02-screen.jpg') }}"></li>
                                <li><img src="{{ asset('images/products/galleries/cnj/03-screen.jpg') }}"></li>
                                <li><img src="{{ asset('images/products/galleries/cnj/04-screen.jpg') }}"></li>
                                <li><img src="{{ asset('images/products/galleries/cnj/07-screen.jpg') }}"></li>
                                <li><img src="{{ asset('images/products/galleries/cnj/08-screen.jpg') }}"></li>
                                <li><img src="{{ asset('images/products/galleries/cnj/09-screen.jpg') }}"></li>
                            </ul>
                        </div>
                    </div>

                </article>


            </div> <!-- end col-twelve -->
        </div> <!-- end row -->

    </section> <!-- end content -->

@endsection