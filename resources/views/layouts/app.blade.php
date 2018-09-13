<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>TizaPapelByte | Educación, Sociedad y Nuevos Medios</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
  ================================================== -->
    <link rel="stylesheet" href="{{ asset('css/base.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendor.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">


    <!-- script
    ================================================== -->
    <script src="{{ asset('js/modernizr.js') }}"></script>
    <script src="{{ asset('js/pace.min.js') }}"></script>

    <!-- favicons
     ================================================== -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">


    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:300,300i,400,400i,700,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

</head>

<body id="{{ $view_id }}" class="{{ $view_class }}">

@yield('header')
@yield('content')


<!-- footer
================================================== -->
<footer>

    <div class="footer-main">

        <div class="row">

            <div class="col-four tab-full mob-full footer-info">

                <h4>Nosotros</h4>

                <p>
                    Somos un grupo interdisciplinario de profesionales de las Ciencias Sociales y la tecnología, que investiga y desarrolla materiales educativos con el fin de producir saberes sobre los modos de apropiación de los Nuevos Medios.
                </p>

            </div> <!-- end footer-info -->

            <div class="col-two tab-1-3 mob-1-2 site-links">

                <h4>Navegación</h4>

                <ul>
                    <li><a href="{{ route('about') }}">Quiénes Somos</a></li>
                    <li><a href="{{ route('products') }}">Producciones</a></li>
                    <li><a href="{{ route('investigation') }}">Investigación</a></li>
                    <li><a href="{{ route('press') }}">Divulgación</a></li>
                    <li><a href="{{ route('contact') }}">Contacto</a></li>
                </ul>

            </div> <!-- end site-links -->

            <div class="col-two tab-1-3 mob-1-2 social-links">

                <h4>Social</h4>

                <ul>
                    {{--<li><a href="#">Twitter</a></li>--}}
                    {{--<li><a href="#">Facebook</a></li>--}}
                    {{--<li><a href="#">Dribbble</a></li>--}}
                    <li><a href="https://www.facebook.com/TizaPapelByte-365775454885/notifications/" target="_blank">Facebook</a></li>
                    <li><a href="https://www.instagram.com/villagirondo/" target="_blank">Instagram</a></li>
                </ul>

            </div> <!-- end social links -->

            <div class="col-four tab-1-3 mob-full footer-subscribe">

                <h4>Suscribirse</h4>

                <p>Recibe en tu mail las novedades de TPB.</p>

                <div class="subscribe-form">

                    <form id="subscribe-form" class="group" action="{{ route('api.subscribe.store') }}" method="post">
                        <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">

                        <input type="email" value="" name="dEmail" class="email" id="mc-email" placeholder="tu@mail.com" required="required">

                        <input type="submit" name="subscribe" >

                        <label for="mc-email" class="subscribe-message"></label>

                    </form>

                </div>

            </div> <!-- end subscribe -->

        </div> <!-- end row -->

    </div> <!-- end footer-main -->

    <div class="footer-bottom">
        <div class="row">

            <div class="col-twelve">
                <div class="copyright">
                    <span>©2008-2018 TizaPapelByte</span>
                    {{--<span>Design by <a href="http://www.styleshout.com/">styleshout</a></span>--}}
                </div>

                <div id="go-top">
                    <a class="smoothscroll" title="Back to Top" href="#top"><i class="icon icon-arrow-up"></i></a>
                </div>
            </div>

        </div>
    </div> <!-- end footer-bottom -->

</footer>

<div id="preloader">
    <div id="loader"></div>
</div>

<!-- Java Script
================================================== -->
<script src="{{ asset('js/jquery-2.1.3.min.js') }}"></script>
<script src="{{ asset('js/plugins.js') }}"></script>
{{--<script src="js/jquery.appear.js"></script>--}}
<script src="{{ asset('js/main.js') }}"></script>

<script>
    $(window).scroll(function() {
        if($(window).scrollTop() > $('header').height()) {
            $(".header-content").addClass('active')
        } else {
            $(".header-content").removeClass('active')
        }
    });
    $('#mc-email').keypress(function(e){
        if(e.which == 13) {
            e.preventDefault();
            if($(this).val() != '' && checkEmail($(this).val())) {
                $('#subscribe-form .subscribe-message').html('Enviando...');
                var data = {
                    _token: $('#_token').val(),
                    email: $('#mc-email').val()
                };
                $.ajax({
                    type: "POST",
                    url: $('#subscribe-form').attr('action'),
                    data: data,
                    success: function(response) {
                        $('#mc-email').val('')
                        $('#subscribe-form .subscribe-message').html('Ya estás suscripto, muchas gracias.');
                    },
                    dataType: 'json'
                });
            }
        }
    })
    $('#submitter').click(function(e){

        e.preventDefault();

        var name = $('#cName').val();
        var email = $('#cEmail').val();
        var website = $('#cWebsite').val();
        var message = $('#cMessage').val();

        if(name != '' && email != '' && message != '' && checkEmail(email)) {
            $('#contact-form .subscribe-message').html('Enviando...').show();
            var data = {
                _token: $('#_token').val(),
                name: name,
                email: email,
                website: website,
                message: message,
            };
            $.ajax({
                type: "POST",
                url: $('#contact-form').attr('action'),
                data: data,
                success: function(response) {

                    $('#cName').val('')
                    $('#cEmail').val('')
                    $('#cWebsite').val('')
                    $('#cMessage').val('')
                    $('#contact-form .subscribe-message').html('Hemos recibido tu mensaje, nos contactaremos a la brevedad.');
                },
                dataType: 'json'
            });
        }
    })
    function checkEmail (email) {
        return /^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))$/i.test(email);
    }
</script>

</body>

</html>