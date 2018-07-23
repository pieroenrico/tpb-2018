@extends('layouts.app')

@section('header')
    @include('partials.header')
@endsection

@section('content')
    <section id="content-wrap" class="site-page">
        <div class="row">
            <div class="col-twelve">

                <section>

                    {{--<div class="content-media">
                        <img src="images/whoweare.jpg">
                    </div>--}}

                    <div class="primary-content">

                        <h1 class="entry-title add-bottom">Acerca de TizaPapelByte</h1>

                        <p class="lead">A través del desarrollo y la investigación trabajamos en el estudio de la potencialidad de las Nuevas Tecnologías como recursos para la enseñanza, tanto dentro como fuera de las aulas.</p>

                        <p>Nuestro trabajo está dirigido en diferentes líneas, siempre nutridos desde la investigación realizada en el campo, producimos una serie de materiales que cubren una amplia variedad: desde videojuegos con temáticas de Ciencias Sociales, pasando por una Base de Datos de Videojuegos para contextos universitarios, hasta una red social para estimular el pensamiento científico en niños de primer y segundo ciclo. Además ofrecemos capacitación y cursos sobre la utilización de estos dispositivos en situaciones de enseñanza.</p>

                        <p>En cada uno de los proyectos, trabajamos a la par con equipos disciplinares y especialistas convocados: Marisa Pineau, Celina Flores, Jorge Blanco, Sebastián Díaz, Carlos Trilnick, Claudio Grandinetti, Carlos Carballo, Tomás Lukin, Gonzalo Frasca, Héctor Poggiese, Diana Gonzalez, Pablo Salomón, La Alameda.</p>

                        <h3 class="entry-title add-bottom">Nuestro trabajo cuenta con el apoyo de las siguientes instituciones:</h3>

                        <div class="row block-1-4 block-tab-full mt-60">
                            <div class="col-three"><img src="/images/logos/aecid.jpg" alt="" class="img-partner"></div>
                            <div class="col-three"><img src="/images/logos/conectar-igualdad.jpg" alt="" class="img-partner"></div>
                            <div class="col-three"><img src="/images/logos/educar.jpg" alt="" class="img-partner"></div>
                            <div class="col-three"><img src="/images/logos/tecnopolis.jpg" alt="" class="img-partner"></div>
                        </div>

                        <div class="row block-1-4 block-tab-full">
                            <div class="col-three"><img src="/images/logos/unaj.jpg" alt="" class="img-partner"></div>
                            <div class="col-three"><img src="/images/logos/flacso.jpg" alt="" class="img-partner"></div>
                            <div class="col-three"><img src="/images/logos/relpe.jpg" alt="" class="img-partner"></div>
                            <div class="col-three"><img src="/images/logos/pequeno-editor.jpg" alt="" class="img-partner"></div>
                        </div>

                        <div class="row block-1-4 block-tab-full">
                            <div class="col-three"><img src="/images/logos/mica.jpg" alt="" class="img-partner"></div>
                            <div class="col-three"><img src="/images/logos/oei.jpg" alt="" class="img-partner"></div>
                            <div class="col-three"><img src="/images/logos/filo-uba.jpg" alt="" class="img-partner"></div>
                            <div class="col-three"><img src="/images/logos/ua.jpg" alt="" class="img-partner"></div>
                        </div>

                        <hr class="divider small">

                        <h3 class="entry-title add-bottom mt-60">Nuestro equipo:</h3>

                        <div class="row block-1-3 block-tab-full mt-60">

                            <div class="col-three text-center team-member">
                                <img src="/images/team/analia.jpg" alt="" class="img-team">
                                <h4>Analia Segal</h4>
                                <h5>Profesora de Psicología y Ciencias de la Educación (ISP Joaquín V. González).
                                    Psicóloga Social.</h5>
                            </div>

                            <div class="col-three text-center team-member">
                                <img src="/images/team/roxana.jpg" alt="" class="img-team">
                                <h4>Roxana Perazza</h4>
                                <h5>Licenciada en Ciencias de la Educación ( UBA) y Especialista en políticas públicas (Flacso).</h5>
                            </div>

                            <div class="col-three text-center team-member">
                                <img src="/images/team/piero.jpg" alt="" class="img-team">
                                <h4>Piero Bona</h4>
                                <h5>Desarrollador en Nuevos Medios y Diseñador.</h5>
                            </div>

                            <div class="col-three text-center team-member">
                                <img src="/images/team/jaime.jpg" alt="" class="img-team">
                                <h4>Jaime Piracon</h4>
                                <h5>Lic. en Psicología (Universidad Nacional de Colombia)</h5>
                            </div>

                        </div>


                        <div class="row block-1-3 block-tab-full mt-60">


                            <div class="col-three text-center team-member">
                                <img src="/images/team/vale.jpg" alt="" class="img-team">
                                <h4>Valeria Stern</h4>
                                <h5>Presentación</h5>
                            </div>

                            <div class="col-three text-center team-member">
                                <img src="/images/team/luisa.jpg" alt="" class="img-team">
                                <h4>Luisa Tomatti</h4>
                                <h5>Presentación</h5>
                            </div>


                            <div class="col-three text-center team-member">
                                <img src="/images/team/vanina.jpg" alt="" class="img-team">
                                <h4>Vanina Estevez</h4>
                                <h5>Consultora. Lic. en Cs. de la Educación (UBA). Especialista en Tics y Prácticas del Lenguaje. Coordinadora de Tics en Escuelas primarias en proyectos de Arte y Medios Audiovisuales. Investigadora.</h5>
                            </div>

                            <div class="col-three text-center team-member">
                                <img src="/images/team/ines.jpg" alt="" class="img-team">
                                <h4>Ines Dussel</h4>
                                <h5>Asesora. Lic. en Cs. de la Educación (UBA). Magister en Ciencias Sociales (FLACSO). Doctora en Educación (Universidad de Wisconsin, Madison)</h5>
                            </div>

                        </div>

                        <div class="row block-1-3 block-tab-full mt-60" style="display: none;">

                            <div class="row team-member">
                                <div class="col-three">
                                    <img src="/images/team/analia.jpg" alt="" class="img-team">
                                </div>
                                <div class="col-nine">
                                    <h4>Analia Segal</h4>
                                    <h5>Profesora de Psicología y Ciencias de la Educación (ISP Joaquín V. González).
                                        Psicóloga Social.</h5>

                                    <p>La temática de los videojuegos y sus posibles usos educativos me convoca desde mi historia profesional.
                                        A lo largo de mi carrera trabajé en la producción de materiales educativos en ámbitos privados y públicos y creo que pueden producir
                                        efectos interesantes si se los incluye como herramientas para la formación y la profesionalización docente.
                                        La escuela está hoy frente al desafío de explorar modos fértiles de apropiación de las tecnologías.
                                        Con esta idea estamos explorando los lenguajes digitales, proponemos experiencias y materiales y analizamos los
                                        efectos de su circulación en ámbitos de educación formal e informal. </p>
                                    <p>Formé parte de equipos de diseño de currículum, desarrollé tareas de asesoramiento,
                                        dirigí diversas colecciones de materiales de enseñanza para distintos niveles educativos, he coordinado y
                                        desarrollado programas y materiales para la formación de docentes. En el ámbito de la gestión pública,
                                        tuve a cargo el <strong>Programa Nacional de Innovaciones Educativas del Ministerio de Educación y
                                            Cultura de la Nación</strong> y posteriormente la <strong>Coordinación General de la Escuela de Capacitación Docente (CePA)</strong> de la
                                        Secretaría de Educación del Gobierno de la Ciudad de Buenos Aires.</p>
                                </div>
                            </div>

                            <hr class="divider small">

                            <div class="row team-member">
                                <div class="col-three">
                                    <img src="/images/team/roxana.jpg" alt="" class="img-team">
                                </div>
                                <div class="col-nine">
                                    <h4>Roxana Perazza</h4>
                                    <h5>Licenciada en Ciencias de la Educación ( UBA) y Especialista en políticas públicas (Flacso).</h5>

                                    <p>He trabajado en diversos espacios de toma de decisiones en el área de políticas públicas en el sector educativo, desde esa experiencia creo que si se busca la mejora de la enseñanza, es indispensable poner a prueba nuevos mecanismos en pos de dicho objetivo. El uso de las nuevas tecnologías no parece estar en duda; sin embargo es necesario conocer y entender más a fondo qué sucede en las escuelas y en las aulas para acompañar a los docentes en el uso de las diversas herramientas.</p>
                                    <p>Desde esta óptica, me interesa el estudio y análisis del impacto de los videojuegos en los procesos de enseñanza-aprendizaje, observar entender la multiplicidad de factores que entran en juego cuando se incorpora un "nuevo " dispositivo en el ámbito escolar. He sido <strong>Subsecretaria de Educación del Gobierno de la Ciudad de Buenos Aires</strong> entre el 2000 y el 2003 y <strong>Secretaria de Educación del Gobierno de la Ciudad de Buenos Aires</strong> desde el 2003 hasta el 2006. Actualmente, desarrollo trabajos de investigación y consultoría en diversos países. Soy autora de publicaciones sobre diversos temas relacionados con la educación pública. Dirijo una colección de <strong>Educación y Política en Aique editorial</strong>.</p>
                                </div>
                            </div>

                            <hr class="divider small">

                            <div class="row team-member">
                                <div class="col-three">
                                    <img src="/images/team/piero.jpg" alt="" class="img-team">
                                </div>
                                <div class="col-nine">
                                    <h4>Piero Bona</h4>
                                    <h5>Desarrollador en Nuevos Medios y Diseñador. <br>
                                        Desde el año 1999 trabaja en la producción de materiales interactivos tanto en formato online como offline.</h5>

                                    <p>El área de los videojuegos me convoca desde niño, primero como jugador y luego como desarrollador. En mi carrera profesional desarrollé juegos para proyectos independientes y promocionales, para marcas como National Geographic, Discovery Home & Health, Discovery Kids y Samsung.</p>
                                </div>
                            </div>

                        </div>

                    </div>

                </section>

            </div> <!-- end col-twelve -->
        </div> <!-- end row -->

    </section> <!-- end content -->
@endsection