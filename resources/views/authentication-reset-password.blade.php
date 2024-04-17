@extends('layouts.app')

@section('content')
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
	<title>Cambiar Contraseña</title>
</head>

<!-- wrapper -->
<div class="wrapper">
    <div class="authentication-reset-password d-flex align-items-center justify-content-center">
        <div class="row">
            <div class="col-12 col-lg-10 mx-auto">
                <div class="card">
                    <div class="row g-0">
                        <div class="col-lg-5 border-end">
                            <div class="card-body">
                                <div class="p-5">
                                    <div class="text-start">
                                        <img src="assets/images/samagu-logo-img.png" width="300" alt="samagu.logo">
                                    </div>
                                    <h4 class="mt-5 font-weight-bold">Cambiar Contraseña</h4>
                                    <div class="mb-3 mt-5">
                                        <label class="form-label">Nueva Contraseña</label>
                                        <input type="text" class="form-control" placeholder="Ingresar nueva contraseña" />
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Confirmar Contraseña</label>
                                        <input type="text" class="form-control" placeholder="Confirmar contraseña" />
                                    </div>
                                    <div class="d-grid gap-2">
                                        <button type="button" class="btn btn-primary">Cambiar Contraseña</button> <a href="{{ url('authentication-signin') }}" class="btn btn-light"><i class='bx bx-arrow-back mr-1'></i>Volver al login</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <img src="assets/images/login-images/forgot-password-frent-img.jpg" class="card-img login-img h-100" alt="...">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end wrapper -->
@endsection
