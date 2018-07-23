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
                            <img src="{{ asset('images/products/galleries/um/traffic_jam.jpg') }}">
                        </div>
                    </div>

                    <div class="primary-content">

                        <h1 class="entry-title">Urgente Mensaje</h1>

                        <ul class="entry-meta">
                            <li class="date">2010</li>
                            <li class="cat"><a href="">Videojuego</a></li>
                        </ul>

                        <p class="lead"><strong>Urgente Mensaje: El desafío de llegar</strong> invita a sumergirse en la toma de decisiones de logística en un entorno futurista. </p>


                        <p>El juego gira alrededor de la figura de un mensajero que debe llevar recados a diversos lugares del globo. A través de las misiones que debe resolver, los recursos de los que dispone y los conflictos que condicionan las opciones que tomará, los jugadores tomarán contacto con la complejidad que tiene la circulación de bienes y personas en el
                            mundo actual, las vías y medios de transportes disponibles, y sus costos ambientales.</p>

                        <p>El juego invita a "viajar" por el mundo tomando decisiones, sorteando obstáculos, haciendo
                            uso de la tecnología que se presenta como disponible. El éxito del jugador dependerá en
                            gran medida del modo en que pueda sopesar las diversas variables que el juego le plantea y
                            atenderlos cuando toma sus decisiones.</p>

                        <p>Durante el 2009 y 2010 se realizaron experiencias de trabajo con docentes y alumnos en
                            escuelas de Provincia y de Ciudad de Buenos Aires.</p>


                        {{--<p class="text-center"><img src="{{ asset('images/products/galleries/um/postman.png') }}" alt="" width="300"></p>--}}

                    </div>

                    <div class="content-media">
                        <div class="post-slider flexslider" style="width:800px !important; margin: 60px auto;">
                            <ul class="slides">
                                <li><img src="{{ asset('images/products/galleries/um/um-cover.jpg') }}"></li>
                                <li><img src="{{ asset('images/products/galleries/um/um1.jpg') }}"></li>
                                <li><img src="{{ asset('images/products/galleries/um/um2.jpg') }}"></li>
                                <li><img src="{{ asset('images/products/galleries/um/um3.jpg') }}"></li>
                                <li><img src="{{ asset('images/products/galleries/um/um4.jpg') }}"></li>
                                <li><img src="{{ asset('images/products/galleries/um/um5.jpg') }}"></li>
                                <li><img src="{{ asset('images/products/galleries/um/um6.jpg') }}"></li>
                                <li><img src="{{ asset('images/products/galleries/um/um7.jpg') }}"></li>
                            </ul>
                        </div>
                    </div>

                </article>




            </div> <!-- end col-twelve -->
        </div> <!-- end row -->

    </section> <!-- end content -->

@endsection