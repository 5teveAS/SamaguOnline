		@extends("layouts.app")
		@section("wrapper")


            <div class="page-wrapper">
                <div class="page-content">
                    <!--breadcrumb-->
                    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                        <div class="breadcrumb-title pe-3">Registrar Empleado</div>
                        <div class="ps-3">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb mb-0 p-0">
                                    <li class="breadcrumb-item"><a href="{{ route('employee.datatable') }}"><i class="bx bx-home-alt"></i></a>
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
                                <a href="{{ route('employee.datatable') }}"  class="btn btn-dark px-5" >Volver a la tabla</a>
                            </div>
                            <hr/>
                            <div class="card border-top border-0 border-4 border-success">
                                <div class="card-body p-5">
                                    <div class="card-title d-flex align-items-center">
                                        <div><i class=""></i>
                                        </div>
                                        <h5 class="mb-0 text-success">Registrar Empleado</h5>
                                    </div>
                                    <hr>
                                    <form method="POST" action="{{route('employee.store')}}" class="row g-3" enctype="multipart/form-data">
                                        @csrf
                                        @method('POST')
                                        <div class="col-md-6">
                                            <label for="employee_identification" class="form-label"><span class="required">* </span>Cédula</label>
                                            <input type="text"
                                                   class="form-control"
                                                   name="identification"
                                                   id="employee_identification"
                                                   placeholder="Ingresar la cédula"
                                                   value="{{old('identification')}}">
                                                   @error('identification')
                                                   <small>*{{$message}}</small>
                                                   @enderror
                                        </div>

                                        <div class="col-md-6">
                                            <label for="employee_name" class="form-label"><span class="required">* </span>Nombre del empleado</label>
                                            <input type="text"
                                                   class="form-control"
                                                   name="name"
                                                   id="employee_name"
                                                   placeholder="Ingresar nombre"
                                                   value="{{old('name')}}">
                                                   @error('name')
                                                   <small>*{{$message}}</small>
                                                   @enderror
                                        </div>

                                        <div class="col-md-6">
                                            <label for="firstLastName" class="form-label"><span class="required">* </span>Primer apellido</label>
                                            <input type="text"
                                                   class="form-control"
                                                   name="first_last_name"
                                                   id="firstLastName"
                                                   placeholder="Ingresar 1° apellido"
                                                   value="{{old('first_last_name')}}">
                                                   @error('first_last_name')
                                                   <small>*{{$message}}</small>
                                                   @enderror
                                        </div>

                                        <div class="col-md-6">
                                            <label for="secondLastName" class="form-label"><span class="required">* </span>Segundo apellido</label><br>
                                            <input type="text"
                                                   class="form-control"
                                                   name="second_last_name"
                                                   id="secondLastName"
                                                   placeholder="Ingresar 2° apellido"
                                                   value="{{old('second_last_name')}}">
                                                   @error('second_last_name')
                                                   <small>*{{$message}}</small>
                                                    @enderror
                                        </div>

                                        <div class="col-md-6">
                                            <label class="form-label"><span class="required">* </span>Sexo</label><br>
                                            <label for="employee_gender"><input
                                                    type="radio"
                                                    name="gender"
                                                    id="employee_gender"
                                                    value="Masculino" @if(old('gender') == 'Masculino') checked @endif>     Masculino</label><br>
                                            <label for="employee_gender2"><input
                                                    type="radio"
                                                    name="gender"
                                                    id="employee_gender2"
                                                    value="Femenino" @if(old('gender')=='Femenino') checked @endif>     Femenino</label>
                                                    @error('gender')
                                                    <br>
                                                    <small>*{{$message}}</small>
                                                    @enderror
                                        </div>

                                        <div class="col-md-6">
                                            <label for="employee_image" class="form-label">Fotografía del empleado (opcional)</label>
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
                                            <label for="employee_phone" class="form-label"><span class="required">* </span>Teléfono del empleado</label><br>
                                            <input type="text"
                                                   class="form-control"
                                                   name="phone"
                                                   id="employee_phone"
                                                   placeholder="Ingresar teléfono"
                                                   value="{{old('phone')}}">
                                                   @error('phone')
                                                       <small>*{{$message}}</small>
                                                   @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label for="phone2" class="form-label"><span class="required">* </span>Teléfono de emergencia</label><br>
                                            <input type="text"
                                                   class="form-control"
                                                   name="emergency_phone"
                                                   id="phone2"
                                                   placeholder="Ingresar teléfono"
                                                   value="{{old('emergency_phone')}}">
                                                   @error('emergency_phone')
                                                       <small>*{{$message}}</small>
                                                   @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label for="employee_address" class="form-label"><span class="required">* </span>Dirección exacta</label><br>
                                            <input    type="text"
                                                      class="form-control"
                                                      name="address"
                                                      id="employee_address"
                                                      placeholder="Ingresar dirección"
                                                      rows="2"
                                                      value="{{old('address')}}">
                                                      @error('address')
                                                          <small>*{{$message}}</small>
                                                      @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label for="diseases" class="form-label">Enfermedades o alergias (opcional)</label><br>
                                            <textarea class="form-control"
                                                      id="diseases"
                                                      name="diseases"
                                                      placeholder="Ingresar enfermedades o alergias (opcional)"
                                                      rows="2"
                                            ></textarea>
                                            @error('diseases')
                                            <small>*{{$message}}</small>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label for="employee_email" class="form-label"><span class="required">* </span>Correo electrónico</label>
                                            <input type="text"
                                                   class="form-control"
                                                   name="email"
                                                   id="employee_email"
                                                   placeholder="Ingresar correo electrónico"
                                                   value="{{old('email')}}"
                                                   autocomplete="new-email">
                                                   @error('email')
                                                       <small>*{{$message}}</small>
                                                   @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label for="fechaIngreso" class="form-label"><span class="required">* </span>Fecha de ingreso</label>
                                            <input class="result form-control"
                                                   name="date_of_admission"
                                                   type="date"
                                                   id="fechaIngreso"
                                                   value="{{old('date_of_admission')}}">
                                                   @error('date_of_admission')
                                                       <small>*{{$message}}</small>
                                                   @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label for="employee_salary" class="form-label"><span class="required">* </span>Salario del empleado</label><br>
                                            <input type="text"
                                                   class="form-control"
                                                   name="salary"
                                                   id="employee_salary"
                                                   placeholder="Ingresar Salario"
                                                   value="{{old('salary')}}">
                                                   @error('salary')
                                                       <small>*{{$message}}</small>
                                                   @enderror
                                        </div>


                                        <div class="col-12">
                                            <button type="submit" class="btn btn-success px-5">Agregar Empleado</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                    <!--end row-->
                </div>

            </div>
		@endsection



