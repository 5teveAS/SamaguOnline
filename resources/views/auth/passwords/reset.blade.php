{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--<div class="container">--}}
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-md-8">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">{{ __('Reset Password') }}</div>--}}

{{--                <div class="card-body">--}}
{{--                    <form method="POST" action="{{ route('password.update') }}">--}}
{{--                        @csrf--}}

{{--                        <input type="hidden" name="token" value="{{ $token }}">--}}

{{--                        <div class="row mb-3">--}}
{{--                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>--}}

{{--                                @error('email')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="row mb-3">--}}
{{--                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">--}}

{{--                                @error('password')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="row mb-3">--}}
{{--                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="row mb-0">--}}
{{--                            <div class="col-md-6 offset-md-4">--}}
{{--                                <button type="submit" class="btn btn-primary">--}}
{{--                                    {{ __('Reset Password') }}--}}
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
{{--    <!doctype html>--}}
{{--<html lang="en">--}}

{{--<head>--}}
{{--    <!-- Required meta tags -->--}}
{{--    <meta charset="utf-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1">--}}
{{--    <!--favicon-->--}}
{{--    <link rel="icon" href="assets/images/world-logo.png" type="image/png" />--}}
{{--    <!-- loader-->--}}
{{--    <link href="assets/css/pace.min.css" rel="stylesheet" />--}}
{{--    <script src="assets/js/pace.min.js"></script>--}}
{{--    <!-- Bootstrap CSS -->--}}
{{--    <link href="assets/css/bootstrap.min.css" rel="stylesheet">--}}
{{--    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">--}}
{{--    <link href="assets/css/app.css" rel="stylesheet">--}}
{{--    <link href="assets/css/icons.css" rel="stylesheet">--}}
{{--    <title>Iniciar Sesión</title>--}}
{{--</head>--}}

{{--<body class="bg-login">--}}
{{--<!--wrapper-->--}}
{{--<div class="wrapper">--}}
{{--    <div class="section-authentication-signin d-flex align-items-center justify-content-center my-5 my-lg-0">--}}
{{--        <div class="container-fluid">--}}
{{--            <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">--}}
{{--                <div class="col mx-auto">--}}
{{--                    <div class="mb-4 text-center">--}}
{{--                        <img src="assets/images/samagu-logo-img.png" width="300" alt="samagu-logo" />--}}
{{--                    </div>--}}
{{--                    <div class="card">--}}
{{--                        <div class="card-body">--}}
{{--                            <div class="border p-4 rounded">--}}
{{--                                <div class="text-center">--}}
{{--                                    <h3 class="">Iniciar Sesión</h3>--}}
{{--                                    <form method="POST" action="{{ route('password.update') }}">--}}
{{--                                            @csrf--}}

{{--                                            <input type="hidden" name="token" value="{{ $token }}">--}}

{{--                                            <div class="row mb-3">--}}
{{--                                                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>--}}

{{--                                                <div class="col-md-6">--}}
{{--                                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>--}}

{{--                                                    @error('email')--}}
{{--                                                        <span class="invalid-feedback" role="alert">--}}
{{--                                                            <strong>{{ $message }}</strong>--}}
{{--                                                        </span>--}}
{{--                                                    @enderror--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

{{--                                            <div class="row mb-3">--}}
{{--                                                <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>--}}

{{--                                                <div class="col-md-6">--}}
{{--                                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">--}}

{{--                                                    @error('password')--}}
{{--                                                        <span class="invalid-feedback" role="alert">--}}
{{--                                                            <strong>{{ $message }}</strong>--}}
{{--                                                        </span>--}}
{{--                                                    @enderror--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

{{--                                            <div class="row mb-3">--}}
{{--                                                <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>--}}

{{--                                                <div class="col-md-6">--}}
{{--                                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

{{--                                            <div class="row mb-0">--}}
{{--                                                <div class="col-md-6 offset-md-4">--}}
{{--                                                    <button type="submit" class="btn btn-primary">--}}
{{--                                                        {{ __('Reset Password') }}--}}
{{--                                                    </button>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </form>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!--end row-->--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--<!--end wrapper-->--}}

{{--<!--plugins-->--}}
{{--<script src="assets/js/jquery.min.js"></script>--}}

{{--<script>--}}
{{--    $(document).ready(function () {--}}
{{--        $("#show_hide_password a").on('click', function (event) {--}}
{{--            event.preventDefault();--}}
{{--            if ($('#show_hide_password input').attr("type") == "text") {--}}
{{--                $('#show_hide_password input').attr('type', 'password');--}}
{{--                $('#show_hide_password i').addClass("bx-hide");--}}
{{--                $('#show_hide_password i').removeClass("bx-show");--}}
{{--            } else if ($('#show_hide_password input').attr("type") == "password") {--}}
{{--                $('#show_hide_password input').attr('type', 'text');--}}
{{--                $('#show_hide_password i').removeClass("bx-hide");--}}
{{--                $('#show_hide_password i').addClass("bx-show");--}}
{{--            }--}}
{{--        });--}}
{{--    });--}}
{{--</script>--}}
{{--</body>--}}

{{--</html>--}}

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="author" content="Kodinger">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Reset Password</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/my-login.css') }}">
</head>
<body class="my-login-page">
<section class="h-100">
    <div class="container h-100">
        <div class="row justify-content-md-center align-items-center h-100">
            <div class="card-wrapper">

                <div class="cardx fat">
                    <div class="card-body">
                        <div class="mb-5 text-center">
                            <img src="{{asset('assets/images/samagu-logo-img.png')}}" width="300" alt="samagu-logo" />
                        </div>
                        <hr>
                        <h4 class="card-title">Cambiar la contraseña</h4>
                        <form method="POST" class="my-login-validation" novalidate="" action="{{ route('password.update') }}">
                            @csrf
                            <br>
                            <input type="hidden" name="token" value="{{ $token }}">
                            <div class="form-group">
                                <label for="email" class="form-label">Correo electrónico</label>
                                <input id="email" type="email" class="form-control" name="email" placeholder="Correo electrónico" value="{{ $email ?? old('email') }}">
                                <span class="text-danger">@error('email'){{$message}} @enderror</span>
                            </div>
                            <br>
{{--                            <div class="form-group">--}}
{{--                                <label for="password" class="form-label">Nueva contraseña</label>--}}
{{--                                <input id="password" type="password" class="form-control" name="password" placeholder="Escriba la nueva contraseña" autocomplete="new-password">--}}
{{--                                <span class="text-danger">@error('password'){{$message}}@enderror</span>--}}
{{--                            </div>--}}
{{--                            <br>--}}
{{--                            <div class="form-group">--}}
{{--                                <label for="password-confirm" class="form-label">Confirmar contraseña</label>--}}
{{--                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirme su contraseña" autocomplete="new-password">--}}
{{--                                <span class="text-danger">@error('password_confirmation'){{$message}} @enderror</span>--}}
{{--                            </div>--}}
                            <div class="form-group">
                                <label for="password2" class="form-label font-size-16"><span class="text-danger font-size-20">*</span> Nueva contraseña <span class="text-danger font-size-20">(Al menos 8 caracteres y debe contener al menos una letra mayúscula, una minúscula y un símbolo)</span></label><br>
                                <input type="password"
                                       class="form-control @error('password') is-invalid @enderror"
                                       name="password"
                                       id="password2"
                                       placeholder="Ingresar la contraseña"
                                       value="{{old('password')}}"
                                       autocomplete="new-password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                            <strong>* {{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password" class="form-label font-size-16"><span class="text-danger font-size-20">*</span> Confirmar contraseña</label><br>
                                <input type="password"
                                       class="form-control @error('password') is-invalid @enderror"
                                       name="password_confirmation"
                                       id="password"
                                       placeholder="Confirmar la contraseña"
                                       value="{{old('password')}}"
                                       autocomplete="new-password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                            <strong>* {{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                            <br>
                            <div class="row-cols-1">
                                <button type="submit" class="btn btn-primary  px-5">
                                    Cambiar la contraseña
                                </button>
{{--                                <div class="row-cols-1">--}}
{{--                                    <button type="submit" class="btn btn-danger px-5">Cambiar contraseña</button>--}}
{{--                                </div>--}}
                            </div>

                        </form>
                    </div>
                </div>
                <hr>
                <div class="footer">
                    Copyright &copy; 2021 &mdash; Samagu Online S.A.
                </div>
            </div>
        </div>
    </div>
</section>

<script src="jquery-3.4.1.min.js"></script>
<script src="bootstrap/js/popper.js"></script>
<script src="bootstrap/js/bootstrap.js"></script>
<script src="js/my-login.js"></script>
</body>
</html>
