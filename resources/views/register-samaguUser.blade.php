		@extends("layouts.app")
		@section("wrapper")


            <div class="page-wrapper">
                <div class="page-content">
                    <!--breadcrumb-->
                    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                        <div class="breadcrumb-title pe-3">Registrar Usuario SAMAGU</div>
                        <div class="ps-3">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb mb-0 p-0">
                                    <li class="breadcrumb-item"><a href="{{ route('user.datatable') }}"><i class="bx bx-home-alt"></i></a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Registro</li>
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
                    <div class="row">
                        <div class="col-xl-7 mx-auto">
                             <div class="col-12">
                                <a href="{{ route('user.datatable') }}"  class="btn btn-dark px-5" >Volver a la tabla</a>
                            </div>
                            <hr/>
                            <div class="card border-top border-0 border-4 border-success">
                                <div class="card-body p-5">

                                    <div class="card-title d-flex align-items-center">
                                        <div><i class=""></i>
                                        </div>
                                        <h5 class="mb-0 text-success">Registrar Usuario SAMAGU</h5>
                                    </div>
                                    <hr>
                                    <form method="POST" action="{{route('user.store')}}" class="row g-3" enctype="multipart/form-data">
                                        @csrf
                                        @method('POST')
                                        <div class="col-md-6 search-select-box">
                                            <label for="employee_id" class="form-label"><span class="required">* </span>ID del empleado</label>
                                            <select name="employee_id" class="form-control" id="employee_id">

                                                <option value="">Selecciona un empleado</option>
                                                @foreach($employees as $employee)
                                                    <option value="{{$employee->id}}"> {{$employee->id}} - {{$employee->name}} {{$employee->first_last_name}} {{$employee->second_last_name}}</option>
                                                @endforeach
                                            </select>
                                            @error('employee_id')
                                            <small>*{{$message}}</small>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label for="employee_image" class="form-label">Avatar (opcional)</label>
                                            <input class="form-control"
                                                   type="file"
                                                   name="image"
                                                   id="employee_image"
                                                   value="{{old('image')}}">
                                            @error('image')
                                            <small>*{{$message}}</small>
                                            @enderror
                                        </div>

                                        <div class="col-md-6">
                                            <label for="user_name" class="form-label"><span class="required">* </span>Nombre de usuario</label>
                                            <input type="text"
                                                   class="form-control"
                                                   name="user_name"
                                                   id="user_name"
                                                   placeholder="Ingresar nombre de usuario"
                                                   value="{{old('user_name')}}"
                                                   autocomplete="off">
                                            @error('user_name')
                                            <small>*{{$message}}</small>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label for="email" class="form-label"><span class="required">* </span>Correo electrónico</label>
                                            <input type="email"
                                                   class="form-control"
                                                   name="email"
                                                   id="email"
                                                   placeholder="Ingresar correo electrónico"
                                                   value="{{old('email')}}"
                                                   autocomplete="new-email">
                                            @error('email')
                                            <small>*{{$message}}</small>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label for="user_role" class="form-label"><span class="required">* </span>Rol</label>
                                            <select name="role" id="user_role" class="form-control">
                                                <option value="Administrador">Administrador</option>
                                                <option value="Empleado">Empleado</option>

                                            </select>
                                            @error('role')
                                            <small>*{{$message}}</small>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label for="user_password" class="form-label"><span class="required">* </span>Contraseña<span class="text-primary font-size-20">(Al menos 8 caracteres y debe contener al menos una letra mayúscula, una minúscula y un símbolo)</span></label><br>
                                            <input type="password"
                                                   class="form-control"
                                                   name="password"
                                                   id="user_password"
                                                   placeholder="Ingresar la contraseña"
                                                   value="{{old('password')}}"
                                                   autocomplete="new-password">
                                            @error('password')
                                            <small>*{{$message}}</small>
                                            @enderror
                                        </div>


                                        <div class="col-12">
                                            <button type="submit" class="btn btn-success px-5">Agregar Usuario</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                    <!--end row-->
                </div>
            </div>
		@endsection
        @section('script')
                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js" integrity="sha256-+C0A5Ilqmu4QcSPxrlGpaZxJ04VjsRjKu+G82kl5UJk=" crossorigin="anonymous"></script>
                        <script src="{{asset('assets/js/general-scripts.js')}}"></script>
        @endsection



