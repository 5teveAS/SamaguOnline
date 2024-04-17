		@extends("layouts.app")
		@section("wrapper")
            <div class="page-wrapper">
                <div class="page-content">
                    <!--breadcrumb-->
                    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                        <div class="breadcrumb-title pe-3">Perfil de Usuario</div>
                        <div class="ps-3">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb mb-0 p-0">
                                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Perfil del Usuario</li>
                                </ol>
                            </nav>
                        </div>
                        <div class="ms-auto">
                            <div class="btn-group">
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">
                                    <div class="dropdown-divider"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end breadcrumb-->
                    @if(session('user-updated-message'))

                        <div class="alert alert-success text-center">{{session('user-updated-message')}}</div>
                    @endif
                    <div class="row align-items-center justify-content-center">
                        <div class="col-sm-5">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex flex-column align-items-center text-center">

                                                    <img class="profile-image rounded-circle" src="{{auth()->user()->image}}" onerror="this.onerror=null; this.src='{{asset('assets/images/user-logo2.png')}}';" width="250">

                                                <div class="mt-3">
                                                    <h2 class="col">{{auth()->user()->user_name}}</h2>
                                                    <hr/>
                                                    <h5 class="col text-black font-size-sm"><u>Usuario con permisos de {{auth()->user()->role}}</u></h5>
                                                    @foreach($employees as $employee)
                                                        @if($employee->id == auth()->user()->employee_id)
                                                            <h5 class="col text-black font-size-sm"><span class="fw-bolder">Cedula:</span> {{$employee->identification}}</h5>
                                                        @endif
                                                    @endforeach
                                                    @foreach($employees as $employee)
                                                        @if($employee->id == auth()->user()->employee_id)
                                                            <h5 class="col text-black font-size-sm"><span class="fw-bolder">Nombre completo:</span> {{$employee->name}} {{$employee->first_last_name}}  {{$employee->second_last_name}}</h5>
                                                        @endif
                                                    @endforeach
                                                    <h5 class="col text-black font-size-sm"><span class="fw-bolder">Email:</span> {{auth()->user()->email}}</h5>

                                                    <div class="col-12" style="margin-top: 20%">
                                                        <a href="{{route('user.changePassword', auth()->user()->id)}}"  class="btn btn-danger px-5" >Cambiar Contraseña</a>
                                                    </div>

                                                </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
		@endsection
        @section('script')
            <script src="{{asset('assets/js/images.js')}}"></script>
        @endsection


