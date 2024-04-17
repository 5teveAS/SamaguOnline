@extends('layouts.app')

@section('content')
{{--<head>--}}
{{--	<!-- Required meta tags -->--}}
{{--	<meta charset="utf-8">--}}
{{--	<meta name="viewport" content="width=device-width, initial-scale=1">--}}
{{--	<!--favicon-->--}}
{{--	<link rel="icon" href="assets/images/world-logo.png" type="image/png" />--}}
{{--	<!-- loader-->--}}
{{--	<link href="assets/css/pace.min.css" rel="stylesheet" />--}}
{{--	<script src="assets/js/pace.min.js"></script>--}}
{{--	<!-- Bootstrap CSS -->--}}
{{--	<link href="assets/css/bootstrap.min.css" rel="stylesheet">--}}
{{--	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">--}}
{{--	<link href="assets/css/app.css" rel="stylesheet">--}}
{{--	<link href="assets/css/icons.css" rel="stylesheet">--}}
{{--	<title>Cambiar Contraseña</title>--}}
{{--</head>--}}

<!-- wrapper -->
{{--<div class="wrapper">--}}
<div class="page-wrapper">
    <div class="page-content">
<div class="row align-items-center justify-content-center">
    <div class="col-xl-4 mx-auto">
        <div class="col-12">
            <a href="{{ route('auth.profile') }}"  class="btn btn-dark px-5" >Volver al perfil</a>
        </div>
        <hr/>
        <div class="card border-top border-0 border-4 border-danger">
            <div class="card-body p-5">
                <div class="card-title d-flex align-items-center">
                    <div><i class=""></i>
                    </div>
                    <h5 class="mb-0 text-danger">Cambiar contraseña</h5>
                </div>
                <hr>
                <form method="POST" action="{{route('user.updatePassword', $user->id)}}" id="change_password_form" class="row g-3" enctype="multipart/form-data" autocomplete="new-password">
                    @csrf
                    @method('PATCH')

                    <div class="row-cols-1">
                        <label for="old_password" class="form-label"><span class="required">* </span>Contraseña actual</label><br>
                        <input type="password"
                               class="form-control"
                               name="old_password"
                               id="old_password"
                               placeholder="Ingresar la contraseña"
                               autocomplete="new-password"
                               value="{{old('old_password')}}"

                        >
                        @error('old_password')
                        <small>*{{$message}}</small>
                        @enderror
                        @if(session('incorrect-old-password'))
                            <small>*{{session('incorrect-old-password')}}</small>
                        @endif
                    </div>
                    <div class="row-cols-1">
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
                    <div class="row-cols-1">
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
                    <div class="row-cols-1">
                        <button type="submit" class="btn btn-danger px-5">Cambiar contraseña</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
	<!-- end wrapper -->
@endsection
