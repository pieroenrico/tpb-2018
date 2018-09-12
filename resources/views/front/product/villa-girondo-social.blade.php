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
                            <img src="{{ asset('images/products/galleries/vg2/vg-social-cover.jpg') }}">
                        </div>
                    </div>

                    <div class="primary-content">

                        <h1 class="entry-title">Villa Girondo | Social</h1>

                        <ul class="entry-meta">
                            <li class="date">2013</li>
                            <li class="cat"><a href="">Juego de Realidad Alternativa</a></li>
                        </ul>




                    </div>


                    <div class="primary-content">
                        <p class="lead"><strong>Villa Girondo | Social</strong> es un juego de realidad aumentada en el que los participantes deben opinar sobre la relocalización o no de Villa Girondo debido a la construcción de una represa.</p>

                            <p>En el juego aparecen diversos argumentos a favor y en contra sobre los cuáles los participantes deben tomar posición.

                        <p>En el juego aparecen diversos argumentos a favor y en contra sobre los cuáles los
                            participantes deben tomar posición. El juego se desarrolla en Instagram y tiene una duración
                            de dos semanas.</p>

                    </div>

                    <div class="row block-1-4 block-tab-full">
                        <div class="col-three"><img src="{{ asset('images/products/galleries/vg2/01.jpg') }}" alt="" class="img-partner"></div>
                        <div class="col-three"><img src="{{ asset('images/products/galleries/vg2/02.jpg') }}" alt="" class="img-partner"></div>
                        <div class="col-three"><img src="{{ asset('images/products/galleries/vg2/03.jpg') }}" alt="" class="img-partner"></div>
                        <div class="col-three"><img src="{{ asset('images/products/galleries/vg2/04.jpg') }}" alt="" class="img-partner"></div>
                    </div>
                    <div class="row block-1-4 block-tab-full" style="margin-top: 30px;">
                        <div class="col-three"><img src="{{ asset('images/products/galleries/vg2/05.jpg') }}" alt="" class="img-partner"></div>
                        <div class="col-three"><img src="{{ asset('images/products/galleries/vg2/06.jpg') }}" alt="" class="img-partner"></div>
                        <div class="col-three"><img src="{{ asset('images/products/galleries/vg2/07.jpg') }}" alt="" class="img-partner"></div>
                        <div class="col-three"><img src="{{ asset('images/products/galleries/vg2/08.jpg') }}" alt="" class="img-partner"></div>
                    </div>

                </article>


            </div> <!-- end col-twelve -->
        </div> <!-- end row -->

    </section> <!-- end content -->

@endsection