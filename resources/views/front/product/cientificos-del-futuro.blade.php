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

                            <p class="lead" >Lore m ipsum</p>


                    </div>

                    <div class="content-media">
                        <div class="post-thumb">
                            <img src="{{ asset('images/products/galleries/cdf/registro-v2.jpg') }}">
                        </div>
                    </div>

                    <div class="primary-content">
                        <p>Lorem ipsum...</p>

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