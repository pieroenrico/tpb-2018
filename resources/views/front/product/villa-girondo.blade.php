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
                            <img src="{{ asset('images/products/galleries/vg/tresgargantas.jpg') }}">
                        </div>
                    </div>

                    <div class="primary-content">

                        <h1 class="entry-title">Villa Girondo</h1>

                        <ul class="entry-meta">
                            <li class="date">2010</li>
                            <li class="cat"><a href="">Videojuego</a></li>
                        </ul>

                        <p class="lead"><strong>El futuro de Villa Girondo</strong> es un disparador para abordar los debates en torno al aprovechamiento de los recursos naturales y abrir discusiones respecto de la participación ciudadana.
                        </p>


                        <p>En 30 días, Villa Girondo definirá su suerte. Sus habitantes deberán decidir si quieren
                            relocalizarse o no, para dejar lugar al lago que se formará por la construcción de una
                            nueva represa.</p>

                        <p>Al comenzar el juego se otorga a los jugadores un personaje que tiene una postura a favor o
                            en contra de la relocalización y un fundamento para sostener dicha postura, oculto a los
                            demás jugadores. El objetivo de cada jugador es convencer a la mayor cantidad posible de
                            habitantes para que adopten su postura, y de esa manera, ganar la votación final.</p>

                        <p>Para hacerlo, el jugador deberá dirigirse a las Instituciones de Poder presentes en el
                            escenario: el Ministerio de Energía, la Sociedad de Fomento, la Liga de Pueblos
                            Originarios, entre otros. Allí obtendrá argumentos, que deberá utilizar para “convencer”
                            a otros ciudadanos/jugadores.</p>

                        <p><img src="{{ asset('images/products/galleries/vg/all2x.png') }}" class="img-fluid"></p>

                        <p>Hay un solo argumento que hace que un jugador cambie su postura, y el desafío consiste en
                            encontrarlo. Cuando el juego comienza nadie sabe qué postura tiene cada jugador. Para
                            saberlo, los jugadores utilizan la herramienta Poder Revelar Postura, que obtienen en forma
                            azarosa en las Instituciones de Poder.</p>

                        <p>Al finalizar el juego, la postura que haya recibido mayor cantidad de votaciones, será la
                            ganadora, mientras que el jugador ganador será aquel que haya obtenido más puntos a lo
                            largo de la partida.</p>

                        <p>Finalizada la votación, los jugadores acceden a un weblog en el que podrán saber qué
                            consecuencias han tenido para la localidad las decisiones tomadas, cómo impactaron en su
                            vida cotidiana y qué nuevas discusiones se abrieron a partir de las decisiones tomadas. En
                            el blog miran también fragmentos de dos películas, sobre la relocalización de Federación
                            y sobre la construcción de la represa de Tres Gargantas en China.</p>

                        <p>Durante el 2009 y 2010 se realizaron experiencias de trabajo con docentes y alumnos en
                            escuelas de Provincia y de Ciudad de Buenos Aires.</p>


                    </div>

                    <div class="content-media">
                        <div class="post-slider flexslider" style="width:800px !important; margin: 60px auto;">
                            <ul class="slides">
                                <li><img src="{{ asset('images/products/galleries/vg/villa-girondo-0.jpg') }}"></li>
                                <li><img src="{{ asset('images/products/galleries/vg/villa-girondo-all.jpg') }}"></li>
                            </ul>
                        </div>
                    </div>

                </article>


            </div> <!-- end col-twelve -->
        </div> <!-- end row -->

    </section> <!-- end content -->

@endsection