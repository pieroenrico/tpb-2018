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
                            <img src="{{ asset('images/products/galleries/hr/esclavos_zapateros.jpg') }}">
                        </div>
                    </div>

                    <div class="primary-content">

                        <h1 class="entry-title">Humanos Recursos</h1>

                        <ul class="entry-meta">
                            <li class="date">2012</li>
                            <li class="cat"><a href="">Videojuego</a></li>
                        </ul>

                        <div class="quote">
                            <p class="lead" >“Luego fui a trabajar; éramos 18 personas en un cuarto, nosotros
                                tapábamos las cuchetas con sábanas para poder cambiarnos. Era un solo baño para mas
                                de 70 personas, había solamente una cocina y no había nada de agua caliente,
                                y no nos dejaban hervir agua porque se gastaba el gas."</p>
                            <quote>Testimonio de Natividad Obeso, inmigrante peruana en la Argentina.</quote>
                        </div>


                    </div>

                    <div class="content-media">
                        <div class="post-slider flexslider" style="width:800px !important; margin: 60px auto;">
                            <ul class="slides">
                                <li><img src="{{ asset('images/products/galleries/hr/hr-cover.jpg') }}"></li>
                                <li><img src="{{ asset('images/products/galleries/hr/hhrr01.jpg') }}"></li>
                                <li><img src="{{ asset('images/products/galleries/hr/hhrr02.jpg') }}"></li>
                                <li><img src="{{ asset('images/products/galleries/hr/hhrr03.jpg') }}"></li>
                                <li><img src="{{ asset('images/products/galleries/hr/hhrr04.jpg') }}"></li>
                                <li><img src="{{ asset('images/products/galleries/hr/hhrr05.jpg') }}"></li>
                                <li><img src="{{ asset('images/products/galleries/hr/hhrr06.jpg') }}"></li>
                                <li><img src="{{ asset('images/products/galleries/hr/hhrr07.jpg') }}"></li>
                                <li><img src="{{ asset('images/products/galleries/hr/hhrr08.jpg') }}"></li>
                            </ul>
                        </div>
                    </div>

                    <div class="primary-content">

                        <p>Durante miles de años la humanidad convivió con la esclavitud. El trabajo esclavo sostuvo
                            una gran parte de la economía del mundo colonial en el siglo XVIII y atravesó la vida
                            cotidiana de las personas. Comprar, vender y disponer de la vida de hombres, mujeres y
                            niños en situación de esclavitud estaba permitido.En el siglo XIX comenzó una larga lucha
                            que culminó con nuevas leyes y normas que establecieron que era ilegal someter a las
                            personas a la esclavitud.</p>

                        <p>En la actualidad la pobreza, la discriminación y la necesidad de migrar de sus países de
                            origen convierte a numerosas personas en trabajadores vulnerables, sometidos a condiciones
                            extremas. Para millones de personas en el mundo de hoy, ¿es la esclavitud realmente una
                            cuestión del pasado? ¿Cuán cerca y cuán lejos tuyo hay personas para quienes no se
                            cumplen las leyes que abolieron la esclavitud?</p>

                        <p>El juego consiste en seleccionar las frases más precisas para describir la relación
                            propuesta (Esclavitud siglo XVIII, Trabajo forzado, Explotación Sexual y Trabajo Ilegal) y
                            ajustarlas de manera correcta en ambos lados. Cuando finalice el tiempo el juego asignará
                            un puntaje y dará pistas que ayudarán a armar correctamente las frases. El jugador deberá
                            sumar una cierta cantidad de puntos para superar los niveles.</p>

                    </div>

                </article>


            </div> <!-- end col-twelve -->
        </div> <!-- end row -->

    </section> <!-- end content -->

@endsection