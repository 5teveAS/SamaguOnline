<!DOCTYPE html>
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
	<title>Recuperar Contraseña</title>
</head>

<body class="bg-forgot">
<!-- wrapper -->
<div class="wrapper">
    <div class="authentication-forgot d-flex align-items-center justify-content-center">
        <div class="card forgot-box">
            <div class="card-body">
                <div class="p-4 rounded  border">
                    <div class="text-center">
                        <img src="assets/images/icons/forgot-2.png" width="120" alt="forgot-icon" />
                    </div>
                    <h4 class="mt-5 font-weight-bold">¿Olvidó su contraseña?</h4>
                    <p class="text-muted">Ingresa tu correo registrado para cambiar tu contraseña</p>
                    <div class="my-4">
                        <label class="form-label">Correo Electrónico</label>
                        <input type="text" class="form-control" placeholder="Ejemplo@usuario.com" />
                    </div>
                    <div class="d-grid gap-2">
                        <button type="button" class="btn btn-primary">Enviar Recuperación</button> <a href="{{ url('authentication-signin') }}" class="btn btn-light"><i class='bx bx-arrow-back me-1'></i>Volver a Iniciar Sesión</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end wrapper -->
</body>


</html>
