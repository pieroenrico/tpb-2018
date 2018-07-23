@extends('layouts.app')

@section('header')
    @include('partials.header')
@endsection

@section('content')
    <!-- masonry
   ================================================== -->
    <section id="bricks" class="product">

        <div class="row masonry">

            <!-- brick-wrapper -->
            <div class="bricks-wrapper">

                <div class="grid-sizer"></div>

                @include('partials.products.cnj')
                @include('partials.products.posdata')
                @include('partials.products.memb')
                @include('partials.products.vg2')
                @include('partials.products.cientificos')
                @include('partials.products.unaj')
                @include('partials.products.hhrr')
                @include('partials.products.vg')
                @include('partials.products.um')
                @include('partials.products.4ha')

            </div> <!-- end brick-wrapper -->

        </div> <!-- end row -->


    </section> <!-- bricks -->
@endsection