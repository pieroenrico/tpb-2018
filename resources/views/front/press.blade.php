@extends('layouts.app')

@section('header')
    @include('partials.header')
@endsection

@section('content')
    <section id="bricks">

        <div class="row masonry">

            <!-- brick-wrapper -->
            <div class="bricks-wrapper">

                <div class="grid-sizer"></div>

                @include('partials.posts.analia')
                @include('partials.posts.micsur')
                @include('partials.posts.paec')
                @include('partials.posts.atlas')


            </div> <!-- end brick-wrapper -->

        </div> <!-- end row -->



    </section> <!-- end bricks -->
@endsection