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
                            <img src="{{ asset('images/products/galleries/cdf/tecnopolis.jpg') }}">
                        </div>
                    </div>

                    <div class="primary-content">

                        <h1 class="entry-title">Científicos del Futuro</h1>

                        <ul class="entry-meta">
                            <li class="date">2013</li>
                            <li class="cat"><a href="">Red Social, realizado para PakaPaka/Tecnopolis</a></li>
                        </ul>

                            <p class="lead" ><strong>Científicos del Futuro</strong> es una plataforma que invita a chicos y chicas a imaginar y diseñar proyectos que mejorarán potencialmente la vida de las personas.
                            </p>

                        <p>En las ciencias se requiere de un trabajo sistemático para validar una idea , para recorrer
                            un camino de producción en el que también hay ensayo y error. No hay un único modo de
                            resolver los interrogantes que nos presentan la vida cotidiana y problemas de la naturaleza
                            y tampoco hay un solo modo de preguntarse cuestiones sobre el mundo que nos rodea.</p>

                        <p>La idea fuerza de Científicos del Futuro ofrecer un entorno para acercarse a las disciplinas
                            científicas sin que ello implique el abandono de la fantasía y de juego.</p>


                    </div>

                    <div class="content-media">
                        <div class="post-thumb">
                            <img src="{{ asset('images/products/galleries/cdf/registro-v2.jpg') }}">
                        </div>
                    </div>

                    <div class="primary-content">

                        <p>¿Cómo se llega a una idea? ¿Qué problemas particulares se quieren resolver y por qué?
                            ¿Cuáles son los itinerarios entre una idea, su desarrollo y concreción? ¿Cómo se pone en
                            juego el trabajo colectivo en este proceso? ¿Cómo funciona una comunidad científica en
                            relación con las creaciones y sus desarrollos y mejoras?</p>

                        <p>La plataforma ofrece distintos espacios de producción en intercambio en las que las que
                            chicos y chicas tienen un acercamiento a estas preguntas, en un proceso en el que diseñan,
                            ponen a prueba sus proyectos e intercambian sus producciones: <strong>Herramientas del Científico,
                                Historia de las Ciencias y el Diario del Inventor</strong> son algunos de los espacios en los que
                            todo esto sucede!</p>


                    </div>

                    <div class="content-media">
                        <div class="post-thumb">
                            <img src="{{ asset('images/products/galleries/cdf/animaciones.jpg') }}">
                        </div>
                    </div>

                </article>


            </div> <!-- end col-twelve -->
        </div> <!-- end row -->

    </section> <!-- end content -->

@endsection