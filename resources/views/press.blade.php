@extends('layouts.app')

@section('content')
    <section id="bricks">

        <div class="row masonry">

            <!-- brick-wrapper -->
            <div class="bricks-wrapper">

                <div class="grid-sizer"></div>

                @include('posts.analia')
                @include('posts.micsur')
                @include('posts.paec')
                @include('posts.atlas')


            </div> <!-- end brick-wrapper -->

        </div> <!-- end row -->



    </section> <!-- end bricks -->
@endsection