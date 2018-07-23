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

                        <p class="lead">El principal objetivo es generar una comunidad de usuarios
                            que comparta su interés por la lectura, y proponerles que se involucren con los cuentos
                            clásicos argentinos desde otro ángulo.</p>

                        <p>La plataforma brinda la posibilidad a los jugadores de compartir en una galería de imágenes las hipótesis visuales que ellos tengan sobre las distintas locaciones citadas en los cuentos elegidos. Este banco de imágenes servirá de material de consulta para otros usuarios y docentes que estén convocando a sus alumnos a participar.</p>

                        <p>La propuesta parte de desplegar sobre un mapa de la Ciudad de Buenos Aires, todos los sitios
                            de interés mencionados en los cuentos seleccionados. La selección de cuentos estará a cargo
                            nuestro y de intelectuales invitados a participar, y abarca la obra de reconocidos autores
                            argentinos del siglo XX.</p>

                        <p>Se hará un relevamiento de los sitios de interés que se mencionan en los cuentos, volcando
                            en el mapa esta información, trazando los posibles recorridos según cada cuento. La
                            plataforma estará vinculada con Google Maps para que los jugadores puedan armar sus propios
                            recorridos o ver las distancias en relación a su casa, barrio o zona más frecuentada.</p>

                        <p>El usuario puede ingresar en el mapa, seleccionar una zona y elegir entre los cuentos
                            propuestos según el barrio, se podrá descargar el cuento o leerlo online. Una vez elegido el
                            cuento, se proponen un grupo de actividades a través de preguntas que el jugador deberá
                            responder a partir de un imaginario y de un recorrido por la zona propuesta, para ello será
                            necesario salir a relevar las imágenes necesarias que respondan a esas preguntas.</p>

                        <p>Finalmente se proveerá un espacio virtual en el que cada jugador/usuario podrá subir las
                            imágenes y vincularlas con el cuento que eligió y la zona abarcada.</p>



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