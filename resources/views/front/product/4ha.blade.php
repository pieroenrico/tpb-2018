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
                            <img src="{{ asset('images/products/galleries/4ha/produccion.jpg') }}">
                        </div>
                    </div>

                    <div class="primary-content">

                        <h1 class="entry-title">4HA</h1>

                        <ul class="entry-meta">
                            <li class="date">2013</li>
                            <li class="cat"><a href="">Videojuego</a></li>
                        </ul>

                        <p class="lead" ><strong>4HA</strong> es un videojuego que propone realizar una experiencia de agricultura
                            basada en la producción agrosustentable de pequeños y medianos productores, en una escala de economía regional.</p>

                        <p>Basado en el caso de los productores agropecuarios del Parque Pereyra Iraola de Buenos Aires, el objetivo
                            del juego es cambiar el tipo de producción en el plazo de 4 años y seguir obteniendo rentabilidad, aunque esto a
                            veces resulte complicado.</p>


                    </div>

                    <div class="content-media">
                        <div class="post-slider flexslider" style="width:800px !important; margin: 60px auto;">
                            <ul class="slides">
                                <li><img src="{{ asset('images/products/galleries/4ha/4ha_1.jpg') }}"></li>
                                <li><img src="{{ asset('images/products/galleries/4ha/4ha_2.jpg') }}"></li>
                                <li><img src="{{ asset('images/products/galleries/4ha/4ha_3.jpg') }}"></li>
                                <li><img src="{{ asset('images/products/galleries/4ha/4ha_4.jpg') }}"></li>
                            </ul>
                        </div>
                    </div>


                </article>


            </div> <!-- end col-twelve -->
        </div> <!-- end row -->

    </section> <!-- end content -->

@endsection