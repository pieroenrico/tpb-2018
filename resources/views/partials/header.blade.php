<!-- header
   ================================================== -->
<header class="short-header" id="top">

    <div class="gradient-block"></div>

    <div class="row header-content">

        <div class="logo">
            <a href="/"><img src="/images/logo.svg" alt=""></a>
        </div>

        <nav id="main-nav-wrap">
            <ul class="main-navigation sf-menu">
                <li class="{{ Route::currentRouteName() == 'home' ? 'current' : '' }}"><a href="{{ route('home') }}" title="">Inicio</a></li>
                <li class="{{ Route::currentRouteName() == 'about' ? 'current' : '' }}"><a href="{{ route('about') }}" title="">Quiénes Somos</a></li>
                <li class="{{ Route::currentRouteName() == 'products' || Route::currentRouteName() == 'product' ? 'current' : '' }}"><a href="{{ route('products') }}" title="">Producciones</a></li>
                <li class="{{ Route::currentRouteName() == 'investigation' ? 'current' : '' }}"><a href="{{ route('investigation') }}" title="">Investigación</a></li>
                <li class="{{ Route::currentRouteName() == 'press' ? 'current' : '' }}"><a href="{{ route('press') }}" title="">Divulgación</a></li>
                <li class="{{ Route::currentRouteName() == 'contact' ? 'current' : '' }}"><a href="{{ route('contact') }}" title="">Contacto</a></li>
                {{--<li class="has-children">
                    <a href="category.html" title="">Producciones</a>
                    <ul class="sub-menu">
                        <li><a href="category.html">Wordpress</a></li>
                        <li><a href="category.html">HTML</a></li>
                        <li><a href="category.html">Photography</a></li>
                        <li><a href="category.html">UI</a></li>
                        <li><a href="category.html">Mockups</a></li>
                        <li><a href="category.html">Branding</a></li>
                    </ul>
                </li>--}}
                {{--<li class="has-children">
                    <a href="single-standard.html" title="">Blog</a>
                    <ul class="sub-menu">
                        <li><a href="single-video.html">Video Post</a></li>
                        <li><a href="single-audio.html">Audio Post</a></li>
                        <li><a href="single-gallery.html">Gallery Post</a></li>
                        <li><a href="single-standard.html">Standard Post</a></li>
                    </ul>
                </li>--}}

                {{--<li><a href="about.html" title="" style="font-weight: ">Blog</a></li>--}}

            </ul>
        </nav> <!-- end main-nav-wrap -->



        <div class="triggers">
            <a class="search-trigger" href="#"><i class="fa fa-search"></i></a>
            <a class="menu-toggle" href="#"><span>Menu</span></a>
        </div> <!-- end triggers -->

    </div>

    <div class="intro">
        <p>Somos un grupo interdisciplinario de <u>profesionales de las Ciencias Sociales</u> y la <u>tecnología</u>, que investiga y desarrolla <u>materiales educativos</u> con el fin de producir saberes sobre los <u>modos de apropiación de los Nuevos Medios</u>.</p>
    </div>

    <div class="scroll">
        <i class="fas fa-chevron-down"></i>
    </div>

</header> <!-- end header -->