@extends('layouts.app')

@section('header')

@endsection

@section('content')
    <!-- masonry
================================================== -->
    <section id="bricks">

        <div class="row masonry">

            <!-- brick-wrapper -->
            <div class="bricks-wrapper">

                <div class="grid-sizer"></div>

                @include('posts.memb')
                @include('posts.cnj')
                @include('posts.analia')
                @include('posts.micsur')
                @include('posts.cdf')
                @include('posts.quote1')
                @include('posts.paec')
                @include('posts.atlas')


            </div> <!-- end brick-wrapper -->

        </div> <!-- end row -->



    </section> <!-- end bricks -->
@endsection