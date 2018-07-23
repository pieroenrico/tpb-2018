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
                            <img src="{{ asset('images/products/galleries/posdata/posdata-cover.jpg') }}">
                        </div>
                    </div>

                    <div class="primary-content">

                        <h1 class="entry-title">Posdata</h1>

                        <ul class="entry-meta">
                            <li class="date">2015</li>
                            <li class="cat"><a href="">Colección Iconografía: Juego de Cartas</a></li>
                        </ul>




                    </div>


                    <div class="primary-content">
                        <p class="lead">Partiendo de la idea de que las imágenes contienen y expresan un sentido que
                            excede su forma externa o las palabras, y la capacidad de comunicar y de interpretar está
                            atravesada por el contexto en el que se expresan, vale pensar que podemos hacer uso de las
                            imágenes para generar nuevos usos e interpretaciones de acuerdo a la combinación y su puesta
                            en juego.</p>

                        <p>Uno de los objetivos de este juego es lograr, mediante la combinatoria de una sucesión de
                            imágenes, la reconstrucción de un suceso histórico que sea interpretable por sus
                            contrincantes.</p>

                        <p>Este objetivo propone estimular la capacidad creativa mediante la selección y combinación de
                            imágenes, a la vez que pone en ejercicio recursos mnemotécnicos y discursivos generados de
                            manera colectiva, mediante el consenso grupal.</p>


                    </div>

                    <div class="row block-1-4 block-tab-full">
                        <div class="col-three"><img src="{{ asset('images/products/galleries/posdata/alfonsin.png') }}" alt="" class="img-partner"></div>

                        <div class="col-three"><img src="{{ asset('images/products/galleries/posdata/arbol.png') }}" alt="" class="img-partner"></div>
                        <div class="col-three"><img src="{{ asset('images/products/galleries/posdata/escudo.png') }}" alt="" class="img-partner"></div>
                        <div class="col-three"><img src="{{ asset('images/products/galleries/posdata/gardel.png') }}" alt="" class="img-partner"></div>
                    </div>
                    <div class="row block-1-4 block-tab-full" style="margin-top: 30px;">
                        <div class="col-three"><img src="{{ asset('images/products/galleries/posdata/estrella.png') }}" alt="" class="img-partner"></div>
                        <div class="col-three"><img src="{{ asset('images/products/galleries/posdata/granadero.png') }}" alt="" class="img-partner"></div>
                        <div class="col-three"><img src="{{ asset('images/products/galleries/posdata/sanmartin.png') }}" alt="" class="img-partner"></div>
                        <div class="col-three"><img src="{{ asset('images/products/galleries/posdata/malvinas.png') }}" alt="" class="img-partner"></div>
                    </div>
                    <div class="row block-1-4 block-tab-full" style="margin-top: 30px;">
                        <div class="col-three"><img src="{{ asset('images/products/galleries/posdata/maradona.png') }}" alt="" class="img-partner"></div>
                        <div class="col-three"><img src="{{ asset('images/products/galleries/posdata/casa.png') }}" alt="" class="img-partner"></div>
                        <div class="col-three"><img src="{{ asset('images/products/galleries/posdata/copa.png') }}" alt="" class="img-partner"></div>
                        <div class="col-three"><img src="{{ asset('images/products/galleries/posdata/flores.png') }}" alt="" class="img-partner"></div>
                    </div>


                </article>


            </div> <!-- end col-twelve -->
        </div> <!-- end row -->

    </section> <!-- end content -->

@endsection