@extends('layouts.app')

@section('header')
    @include('partials.header')
@endsection

@section('content')
    <!-- masonry
   ================================================== -->
    <section id="bricks" class="investigation">

        <div class="row masonry">

            <!-- brick-wrapper -->
            <div class="bricks-wrapper">

                <div class="grid-sizer"></div>

                @include('partials.investigations.cuestiones')
                @include('partials.investigations.prohibido-jugar')
                @include('partials.investigations.llevando-videojuegos')
                @include('partials.investigations.indagaciones2010')
                @include('partials.investigations.um')
                @include('partials.investigations.indagaciones2008')






            </div> <!-- end brick-wrapper -->

        </div> <!-- end row -->


    </section> <!-- bricks -->
@endsection