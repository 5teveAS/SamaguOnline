{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--<div class="container">--}}
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-md-8">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">{{ __('Reset Password') }}</div>--}}

{{--                <div class="card-body">--}}
{{--                    @if (session('status'))--}}
{{--                        <div class="alert alert-success" role="alert">--}}
{{--                            {{ session('status') }}--}}
{{--                        </div>--}}
{{--                    @endif--}}

{{--                    <form method="POST" action="{{ route('password.email') }}">--}}
{{--                        @csrf--}}

{{--                        <div class="row mb-3">--}}
{{--                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>--}}

{{--                                @error('email')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="row mb-0">--}}
{{--                            <div class="col-md-6 offset-md-4">--}}
{{--                                <button type="submit" class="btn btn-primary">--}}
{{--                                    LOL--}}
{{--                                </button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--@endsection--}}
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon" href={{asset("assets/images/world-logo.png")}} type="image/png" />
    <!-- loader-->
    <link href={{asset("assets/css/pace.min.css")}} rel="stylesheet" />
    <script src={{asset("assets/js/pace.min.js")}}></script>
    <!-- Bootstrap CSS -->
    <link href={{asset("assets/css/bootstrap.min.css")}} rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link href={{asset("assets/css/app.css")}} rel="stylesheet">
    <link href={{asset("assets/css/icons.css")}} rel="stylesheet">
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
                        <img src={{asset("assets/images/icons/forgot-2.png")}} width="120" alt="forgot-icon" />
                    </div>
                    <h4 class="mt-5 font-weight-bold">¿Olvidó su contraseña?</h4>
                    <p class="text-muted">Ingresa tu correo registrado para cambiar tu contraseña</p>
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        @if (session('status'))
                            <div class="alert alert-success text-center">
                                ¡Se han enviado los pasos para <br>restablecer la contraseña al correo electronico!
                            </div>
                        @endif
                        <div class="my-4">
                            <label for="email" class="form-label">Correo Electrónico</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Ejemplo@usuario.com" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                        </div>
{{--                        <div class="row mb-3">--}}
{{--                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                                                <div class="d-grid gap-2">--}}
{{--                                                <button type="button" class="btn btn-primary">Enviar Recuperación</button> <a href="{{ url('authentication-signin') }}" class="btn btn-light"><i class='bx bx-arrow-back me-1'></i>Volver a Iniciar Sesión</a>--}}
{{--                                            </div>--}}


                        <div class="col-12">
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success"><i class="bx"></i>Restablecer la contraseña</button>
                            </div>

                        </div>
                        <hr>
                        <div class="d-grid">
                            <a href="/login" class="btn btn-primary"><i class="bx bx-arrow-back"></i>Volver al login</a>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end wrapper -->
</body>


</html>
