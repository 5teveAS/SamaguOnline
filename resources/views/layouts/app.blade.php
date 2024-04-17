<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
	<!--favicon-->
	<link rel="icon" href="{{asset('assets/images/world-logo.png')}}" type="image/png" />
	<!--plugins-->
	@yield("style")

	<link href="{{asset('assets/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet" />
	<link href="{{asset('assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" />
	<link href="{{asset('assets/plugins/metismenu/css/metisMenu.min.css')}}" rel="stylesheet" />
	<!-- loader-->
	<link href="{{asset('assets/css/pace.min.css')}}" rel="stylesheet" />
	<script src="{{asset('assets/js/pace.min.js')}}"></script>

	<!-- Bootstrap CSS -->
	<link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('assets/css/app.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/general-styles.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.bootstrap3.min.css" integrity="sha256-ze/OEYGcFbPRmvCnrSeKbRTtjG4vGLHXgOqsyLFTRjg=" crossorigin="anonymous" />
    <link href="{{asset('assets/css/icons.css')}}" rel="stylesheet">
    

    <!-- Theme Style CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/dark-theme.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/semi-dark.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/header-colors.css')}}" />
    <title>SAMAGU ONLINE</title>
</head>

<body>
	<!--wrapper-->
	<div class="wrapper">
		<!--start header -->
		@include("layouts.header")
		<!--end header -->
		<!--navigation-->
		@include("layouts.nav")
		<!--end navigation-->
		<!--start page wrapper -->
		@yield("wrapper")
		<!--end page wrapper -->
		<!--start overlay-->
		<div class="overlay toggle-icon"></div>
		<!--end overlay-->
		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
		<footer class="page-footer">
			<p class="mb-0">Copyright © 2021. All right reserved.</p>
		</footer>
	</div>
	<!--end wrapper-->
    <!--start switcher-->
    <div class="switcher-wrapper">
        <div class="switcher-btn"> <i class='bx bx-cog bx-spin'></i>
        </div>
        <div class="switcher-body">
            <div class="d-flex align-items-center">
                <h5 class="mb-0 text-uppercase">PERSONALIZADOR DE TEMAS</h5>
                <button type="button" class="btn-close ms-auto close-switcher" aria-label="Close"></button>
            </div>
            <hr/>
            <h6 class="mb-0">Estilos</h6>
            <hr/>
            <div class="d-flex align-items-center justify-content-between">

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="lightmode" onchange="CheckedLight()">
                    <label class="form-check-label" for="lightmode">Claro</label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="darkmode" onchange="CheckedDark()">

                    <label class="form-check-label" for="darkmode">Oscuro</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="semidark" onchange="CheckedSemi()">
                    <label class="form-check-label" for="semidark">Semi oscuro</label>
                </div>
            </div>
            <hr/>
            <div class="form-check">
                <input class="form-check-input" type="radio" id="minimaltheme" name="flexRadioDefault" onchange="CheckedMinimal()">
                <label class="form-check-label" for="minimaltheme">Tema minimo</label>
            </div>
            <hr/>
            <h6 class="mb-0">Colores de encabezado</h6>
            <hr/>
            <div class="header-colors-indigators">
                <div class="row row-cols-auto g-3">
                    <div class="col">
                        <div class="indigator headercolor1" id="headercolor1"></div>
                    </div>
                    <div class="col">
                        <div class="indigator headercolor2" id="headercolor2"></div>
                    </div>
                    <div class="col">
                        <div class="indigator headercolor3" id="headercolor3"></div>
                    </div>
                    <div class="col">
                        <div class="indigator headercolor4" id="headercolor4"></div>
                    </div>
                    <div class="col">
                        <div class="indigator headercolor5" id="headercolor5"></div>
                    </div>
                    <div class="col">
                        <div class="indigator headercolor6" id="headercolor6"></div>
                    </div>
                    <div class="col">
                        <div class="indigator headercolor7" id="headercolor7"></div>
                    </div>
                    <div class="col">
                        <div class="indigator headercolor8" id="headercolor8"></div>
                    </div>
                </div>
            </div>
            <hr/>
            <h6 class="mb-0">Colores de Barra Lateral</h6>

            <hr/>
            <div class="header-colors-indigators">
                <div class="row row-cols-auto g-3">
                    <div class="col">
                        <div class="indigator sidebarcolor1" id="sidebarcolor1"></div>
                    </div>
                    <div class="col">
                        <div class="indigator sidebarcolor2" id="sidebarcolor2"></div>
                    </div>
                    <div class="col">
                        <div class="indigator sidebarcolor3" id="sidebarcolor3"></div>
                    </div>
                    <div class="col">
                        <div class="indigator sidebarcolor4" id="sidebarcolor4"></div>
                    </div>
                    <div class="col">
                        <div class="indigator sidebarcolor5" id="sidebarcolor5"></div>
                    </div>
                    <div class="col">
                        <div class="indigator sidebarcolor6" id="sidebarcolor6"></div>
                    </div>
                    <div class="col">
                        <div class="indigator sidebarcolor7" id="sidebarcolor7"></div>
                    </div>
                    <div class="col">
                        <div class="indigator sidebarcolor8" id="sidebarcolor8"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <main class="py-4">
        @yield('content')
    </main>
    <!--end switcher-->
	<!-- Bootstrap JS -->

	<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>

	<!--plugins-->
	<script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/general-scripts.js')}}"></script>
	<script src="{{asset('assets/plugins/simplebar/js/simplebar.min.js')}}"></script>
	<script src="{{asset('assets/plugins/metismenu/js/metisMenu.min.js')}}"></script>
	<script src="{{asset('assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
	<!--app JS-->
	<script src="{{asset('assets/js/app.js')}}"></script>

    @yield("script")
    @include("layouts.theme-control")
</body>

</html>
