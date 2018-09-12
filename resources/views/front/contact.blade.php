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
                        <div id="map-wrap">
                            <div id="map-container"></div>
                            <div id="map-zoom-in"></div>
                            <div id="map-zoom-out"></div>
                        </div>
                    </div>--}}

                    <div class="primary-content">

                        <h1 class="entry-title add-bottom">Envíenos su mensaje.</h1>

                        <p class="lead">Nuestro objetivo es estar en contacto con diferentes colegas, instituciones y colaboradores con quienes compartir nuestro trabajo y fortalecer las diferentes áreas de nuestro equipo.</p>

                        <p>Envíenos un mensaje y a la brevedad uno de nuestros representantes se pondrá en contacto.</p>

                        <div class="row">
                            {{--<div class="col-six tab-full">
                                <h4>Where to Find Us</h4>

                                <p>
                                    1600 Amphitheatre Parkway<br>
                                    Mountain View, CA<br>
                                    94043 US
                                </p>

                            </div>--}}

                            <div class="col-six tab-full">
                                <h4>Datos de contacto</h4>

                                <p>tizapapelbyte@gmail.com<br>
                                    analiasegal@gmail.com <br>

                                </p>

                            </div>

                        </div>

                        <form name="cForm" id="cForm" method="post" action="#">
                            <fieldset>

                                <div class="form-field">
                                    <input name="cName" type="text" id="cName" class="full-width" placeholder="Nombre Completo" value="">
                                </div>

                                <div class="form-field">
                                    <input name="cEmail" type="text" id="cEmail" class="full-width" placeholder="Email" value="">
                                </div>

                                <div class="form-field">
                                    <input name="cWebsite" type="text" id="cWebsite" class="full-width" placeholder="Sitio Web"  value="">
                                </div>

                                <div class="message form-field">
                                    <textarea name="cMessage" id="cMessage" class="full-width" placeholder="Mensaje" ></textarea>
                                </div>

                                <button type="submit" class="submit button-primary full-width-on-mobile">Submit</button>

                            </fieldset>
                        </form> <!-- end form -->

                </section>


            </div> <!-- end col-twelve -->
        </div> <!-- end row -->
    </section> <!-- end content -->
@endsection