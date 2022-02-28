<!DOCTYPE html>
<html lang="en">

<head>
    <!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- FAVICONS ICON -->
    <link rel="icon" href="{{ asset('images/favicon.jpg') }}" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/favicon.jpg') }}" />

    <!-- PAGE TITLE HERE -->
    <title>Baldosas RPA</title>

    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- STYLESHEETS -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/templete.min.css') }}">
    <link class="skin" rel="stylesheet" type="text/css" href="{{ asset('css/skin/skin-1.css') }}">
    <!-- Revolution Slider Css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/revolution/css/settings.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/revolution/css/navigation.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/pagination.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/revolution/css/layers.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!-- Sweet Alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/sweet-alert/swal-forms.css') }}">
    <script src="{{ asset('plugins/sweet-alert/swal-forms.js') }}"></script>
    @yield('additional-header')
</head>

<body id="bg">
    <div class="page-wraper d-flex flex-column min-vh-100">
        <!-- header -->
        <header class="site-header header header-style-6 style-1">
            <div class="bg-white">
                <div class="container header-contant-block">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="logo-header logo-black"><a href="index.html"><img src="{{ asset('images/logo.jpg') }}" width="193" height="89" alt=""></a></div>
                        </div>
                        <div class="col-lg-9">
                            <ul class="contact-info clearfix">
                                <li>
                                    <h6 class="text-primary"><i class="ti-mobile text-primary"></i> Llámanos</h6>
                                    <span>666666666</span>
                                </li>
                                <li>
                                    <h6 class="text-primary"><i class="ti-email text-primary"></i> Mándanos un email</h6>
                                    <span>baldosasrpa@gmail.com</span>
                                </li>
                                <li>

                                </li>
                                <li>

                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- main header -->
            <div class="sticky-header main-bar-wraper navbar-expand-lg">
                <div class="main-bar clearfix ">
                    <div class="navigation-bar">
                        <div class="container clearfix">
                            <!-- nav toggle button -->
                            <button class="navbar-toggler collapsed navicon justify-content-end" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                            <!-- main nav -->
                            <div class="header-nav navbar-collapse collapse nav-dark justify-content-start" id="navbarNavDropdown">
                                <ul class="nav navbar-nav">
                                    <li class="{{ \Illuminate\Support\Facades\Request::route()->getName() == 'index' ? 'active' : '' }}"><a href="{{ route('index') }}">Inicio<i class="fa fa-chevron-down"></i></a></li>
                                    @if(session('userLogged'))
                                    <li><a href="{{ route('logout') }}">Cerrar sesión<i class="fa fa-chevron-down"></i></a></li>
                                    <li class="{{ \Illuminate\Support\Facades\Request::route()->getName() == 'listFloorTiles' ? 'active' : '' }}"><a href="{{ route('listFloorTiles') }}">Consultar stock<i class="fa fa-chevron-down"></i></a></li>
                                    <li class="{{ \Illuminate\Support\Facades\Request::route()->getName() == 'listBudgets' ? 'active' : '' }}"><a href="{{ route('listBudgets') }}">Ver Presupuestos<i class="fa fa-chevron-down"></i></a></li>
                                    @else
                                    <li><a href="{{ route('login') }}">Iniciar sesión<i class="fa fa-chevron-down"></i></a></li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- main header END -->
        </header>
        <!-- header END -->
        <!-- Content -->
        <div class="page-content mx-auto"> 
            @yield('content')
            <!-- Content END-->
        </div>
        <!-- Footer -->
        <footer class="site-footer mt-auto">
            <!-- footer bottom part -->
            <div class="footer-bottom footer-line">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 text-center">
                            <span>© EOI - Generation Spain</span>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer END-->
        <!-- scroll top button -->
        <button class="scroltop fa fa-arrow-up style5"></button>
    </div>
    <!-- JavaScript  files ========================================= -->
    <script src="{{ asset('js/jquery.min.js') }}"></script><!-- JQUERY.MIN JS -->
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="{{ asset('plugins/bootstrap/js/popper.min.js') }}"></script><!-- BOOTSTRAP.MIN JS -->
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script><!-- BOOTSTRAP.MIN JS -->
    <script src="{{ asset('plugins/bootstrap-select/bootstrap-select.min.js') }}"></script><!-- FORM JS -->
    <script src="{{ asset('plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js') }}"></script><!-- FORM JS -->
    <script src="{{ asset('plugins/magnific-popup/magnific-popup.js') }}"></script><!-- MAGNIFIC POPUP JS -->
    <script src="{{ asset('plugins/counter/waypoints-min.js') }}"></script><!-- WAYPOINTS JS -->
    <script src="{{ asset('plugins/counter/counterup.min.js') }}"></script><!-- COUNTERUP JS -->
    <script src="{{ asset('plugins/imagesloaded/imagesloaded.js') }}"></script><!-- IMAGESLOADED -->
    <script src="{{ asset('plugins/masonry/masonry-3.1.4.js') }}"></script><!-- MASONRY -->
    <script src="{{ asset('plugins/masonry/masonry.filter.js') }}"></script><!-- MASONRY -->
    <script src="{{ asset('plugins/owl-carousel/owl.carousel.js') }}"></script><!-- OWL SLIDER -->
    <script src="{{ asset('js/custom.min.js') }}"></script><!-- CUSTOM FUCTIONS  -->
    <script src="{{ asset('js/dz.carousel.min.js') }}"></script><!-- SORTCODE FUCTIONS  -->
    <script src='https://www.google.com/recaptcha/api.js'></script> <!-- Google API For Recaptcha  -->

    <script src="{{ asset('js/dz.ajax.js') }}"></script><!-- CONTACT JS  -->
    <!-- REVOLUTION JS FILES -->
    <script src="{{ asset('plugins/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('plugins/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
    <!-- Slider revolution 5.0 Extensions  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
    <script src="{{ asset('plugins/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
    <script src="{{ asset('plugins/revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
    <script src="{{ asset('plugins/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
    <script src="{{ asset('plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
    <script src="{{ asset('plugins/revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
    <script src="{{ asset('plugins/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
    <script src="{{ asset('plugins/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
    <script src="{{ asset('plugins/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
    <script src="{{ asset('plugins/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
    <script src="{{ asset('js/rev.slider.js') }}"></script>
    <script>
        jQuery(document).ready(function() {
            'use strict';
            dz_rev_slider_2();
        }); /*ready*/
    </script>
    @if(session('response-form'))
    <script>
        Swal.fire({
            icon: "{{ session('response-form')['icon'] }}",
            title: "{{ session('response-form')['title'] }}",
            text: "{{ session('response-form')['text'] }}",
        });
        $(".swal2-select").remove();
        
    </script>
    @endif
    @yield('additional-scripts')
</body>

</html>