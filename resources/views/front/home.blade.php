@extends('layouts.app')

@section('header')
    @include('partials.header')
@endsection

@section('content')
    <!-- masonry
    ================================================== -->
    <section id="bricks">

        <div class="row masonry">

            <!-- brick-wrapper -->
            <div class="bricks-wrapper">

                <div class="grid-sizer"></div>

                @include('partials.posts.memb')
                @include('partials.posts.cnj')
                @include('partials.posts.quote2')
                @include('partials.posts.analia')
                @include('partials.posts.cdf')
                @include('partials.posts.quote1')
                @include('partials.posts.press-conversaciones-necesarias')
                @include('partials.posts.curso-vjcs')
                @include('partials.posts.press-el-placer')
                @include('partials.posts.curso-vj1a1')
                @include('partials.posts.curso-vjpuniv')
                @include('partials.posts.radio-sobre-uso')
                @include('partials.posts.curso-vjp')

            </div> <!-- end brick-wrapper -->

        </div> <!-- end row -->



    </section> <!-- end bricks -->
@endsection