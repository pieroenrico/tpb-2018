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
                            <img src="{{ asset('images/products/galleries/memb/memb-cover.jpg') }}">
                        </div>
                    </div>

                    <div class="primary-content">

                        <h1 class="entry-title">Mundos en mi Barrio</h1>

                        <ul class="entry-meta">
                            <li class="date">2018</li>
                            <li class="cat"><a href="">Colección Iconografía: Plataforma</a></li>
                        </ul>




                    </div>


                    <div class="primary-content">

                        <p class="lead">El principal objetivo de esta plataforma es generar una comunidad de usuarios que comparta su interés por la lectura, y proponerles que se involucren con obras literarias argentinas desde un nuevo ángulo. Es una apuesta por integrar diferentes lenguajes, la literatura, la fotografía, a propósito del territorio, el barrio. Se trata de una propuesta que se adapta fácilmente al escenario escolar, pero también es interesante para pensar en otros espacios como clubes barriales, bibliotecas populares, etc.</p>

                        <p>La plataforma brinda la posibilidad a los jugadores de compartir en una galería de imágenes las hipótesis visuales que ellos tengan sobre las distintas locaciones citadas en los cuentos elegidos. Este banco de imágenes servirá de material de consulta para otros usuarios y docentes que estén convocando a sus alumnos a participar.</p>

                        <p>La plataforma brinda la posibilidad a los usuarios de compartir en una galería de imágenes
                            las hipótesis visuales que ellos construyen sobre las distintas referencias espaciales que
                            aparecen en obras elegidas. La selección abarca obras que se desarrollan en diferentes
                            lugares de la Ciudad de Buenos Aires, se incluyeron autores clásicos de la literatura
                            porteña así autores menos explorados; el común denominador de las obras es su fuerte anclaje
                            al territorio.</p>

                        <p>Al ingresar en la plataforma, el usuario puede visualizar un mapa de su zona, leer las obras
                            que hablan sobre el barrio, ver los recorridos fotográficos de otros usuarios a partir de
                            los cuentos y compartir las imágenes que capture en sus propios recorridos. Cada imagen que
                            comparta el lector estará asociada con un lugar específico en el mapa del barrio de manera
                            tal que en la vista de mapa el usuario encontrará una nube de pictogramas que indican las
                            huellas de sus propios recorridos y los de otros usuarios.</p>




                    </div>

                    <div class="row block-1-3 block-tab-full">
                        <div class="col-four"><img src="{{ asset('images/products/galleries/memb/01.jpg') }}" alt="" class="img-partner"></div>
                        <div class="col-four"><img src="{{ asset('images/products/galleries/memb/02.jpg') }}" alt="" class="img-partner"></div>
                        <div class="col-four"><img src="{{ asset('images/products/galleries/memb/03.jpg') }}" alt="" class="img-partner"></div>
                    </div>
                    <div class="row block-1-3 block-tab-full" style="margin-top: 30px;">
                        <div class="col-four"><img src="{{ asset('images/products/galleries/memb/04.jpg') }}" alt="" class="img-partner"></div>
                        <div class="col-four"><img src="{{ asset('images/products/galleries/memb/05.jpg') }}" alt="" class="img-partner"></div>
                        <div class="col-four"><img src="{{ asset('images/products/galleries/memb/06.jpg') }}" alt="" class="img-partner"></div>
                    </div>
                    <div class="row block-1-3 block-tab-full" style="margin-top: 30px;">
                        <div class="col-four"><img src="{{ asset('images/products/galleries/memb/07.jpg') }}" alt="" class="img-partner"></div>
                        <div class="col-four"><img src="{{ asset('images/products/galleries/memb/08.jpg') }}" alt="" class="img-partner"></div>
                        <div class="col-four"><img src="{{ asset('images/products/galleries/memb/09.jpg') }}" alt="" class="img-partner"></div>
                    </div>


                </article>


            </div> <!-- end col-twelve -->
        </div> <!-- end row -->

    </section> <!-- end content -->

@endsection