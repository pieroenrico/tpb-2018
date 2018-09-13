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
            </ul>
        </nav> <!-- end main-nav-wrap -->



        <div class="triggers">
            {{--<a class="search-trigger" href="#"><i class="fa fa-search"></i></a>--}}
            <a class="menu-toggle" href="#"><span>Menu</span></a>
        </div> <!-- end triggers -->

    </div>

    <div class="intro">
        <p>Somos un grupo interdisciplinario de <a href="{{ route('about') }}"><u>profesionales de las Ciencias Sociales y la tecnología</u></a>, que investiga y desarrolla
            <a href="{{ route('products') }}"><u>materiales educativos</u></a> con el fin de producir saberes sobre los <a href="{{ route('investigation') }}"><u>modos de apropiación de los Nuevos Medios</u></a>.</p>
    </div>

    <div class="scroll">
        <i class="fas fa-chevron-down"></i>
    </div>

</header> <!-- end header -->