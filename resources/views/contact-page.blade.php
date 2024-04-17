<!doctype html>
<html lang="en">

	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--favicon-->
		<link rel="icon" href="assets/images/world-logo.png" type="image/png" />
		<!-- loader-->
		<link href="assets/css/pace.min.css" rel="stylesheet" />
		<script src="assets/js/pace.min.js"></script>
		<!-- Bootstrap CSS -->
		<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
		<link href="assets/css/app.css" rel="stylesheet">
		<link href="assets/css/icons.css" rel="stylesheet">
		<title>Contactar SAMAGU</title>
	</head>

<body class="bg-login">
	<!--wrapper-->
    <div class="wrapper">
        <div class="section-authentication-signin d-flex align-items-center justify-content-center my-5 my-lg-0">
            <div class="container-fluid">
                <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
                    <div class="col mx-auto">
                        <div class="mb-4 text-center">
                            <img src="assets/images/samagu-logo-img.png" width="300" alt="samagu-logo" />
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="border p-4 rounded">
                                    <div class="text-center">
                                        <h3 class="">Formulario de Contacto</h3>
                                       {{--  <p>Don't have an account yet? <a href="{{ url('authentication-signup') }}">Sign up here</a> --}}
                                        </p>
                                    </div>
                                  {{--   <div class="d-grid">
                                        <a class="btn my-4 shadow-sm btn-white" href="javascript:;"> <span class="d-flex justify-content-center align-items-center">
                          <img class="me-2" src="assets/images/icons/search.svg" width="16" alt="Image Description">
                          <span>Sign in with Google</span>
											</span>
                                        </a> <a href="javascript:;" class="btn btn-facebook"><i class="bx bxl-facebook"></i>Sign in with Facebook</a>
                                    </div> --}}
                                    <div class="login-separater text-center mb-4"> <span>Rellena los datos del siguiente formulario para contactar con SAMAGU S.A.</span>
                                        <hr/>
                                    </div>
                                    <div class="form-body">
                                        <form class="row g-3" 
                                        action="https://formsubmit.co/f308083a754a628cbabccd01bc7affea"
                                        method="POST">
                                            <div class="col-12">
                                                <label for="nombre" class="form-label">Nombre</label>
                                                <input type="text" class="form-control" id="nombre" placeholder="Ingresa tu nombre" name="Nombre del interesado">
                                            </div>
                                            <div class="col-12">
                                                <label for="apellido" class="form-label">Primer Apellido</label>
                                                <input type="text" class="form-control" id="apellido" placeholder="Ingresa tu 1° apellido" name="Apellido del interesado">
                                            </div>
                                            <div class="col-12">
                                                <label for="inputEmailAddress" class="form-label">Correo Electrónico</label>
                                                <input type="email" class="form-control" id="inputEmailAddress" placeholder="Ingresa tu correo electrónico" name="Correo electrónico">
                                            </div>
                                            <div class="col-12">
                                                <label for="inputEmailAddress" class="form-label">Teléfono</label>
                                                <input type="phone" class="form-control" id="inputEmailAddress" placeholder="Ingresa tu teléfono" name="Teléfono">
                                            </div>
                                            <div class="col-md-15">
                                                <label for="enfermedadesAlergias" class="form-label" >Mensaje</label><br>
                                                <textarea class="form-control" id="enfermedadesAlergias" placeholder="Escribe tu consulta" rows="5" name="Mensaje"></textarea>
                                            </div>
                                           
                                            <div class="col-12">
                                                <div class="d-grid">
                                                    <button type="submit" class="btn btn-primary"><i class="bx "></i>Enviar mensaje</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end row-->
            </div>
        </div>
    </div>
	<!--end wrapper-->

	<!--plugins-->
	<script src="assets/js/jquery.min.js"></script>

    <script>
        $(document).ready(function () {
            $("#show_hide_password a").on('click', function (event) {
                event.preventDefault();
                if ($('#show_hide_password input').attr("type") == "text") {
                    $('#show_hide_password input').attr('type', 'password');
                    $('#show_hide_password i').addClass("bx-hide");
                    $('#show_hide_password i').removeClass("bx-show");
                } else if ($('#show_hide_password input').attr("type") == "password") {
                    $('#show_hide_password input').attr('type', 'text');
                    $('#show_hide_password i').removeClass("bx-hide");
                    $('#show_hide_password i').addClass("bx-show");
                }
            });
        });
    </script>
</body>

</html>
