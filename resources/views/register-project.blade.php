		@extends("layouts.app")
		@section("wrapper")
            <div class="page-wrapper">
                <div class="page-content">
                    <!--breadcrumb-->
                    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                        <div class="breadcrumb-title pe-3">Registrar Proyecto</div>
                        <div class="ps-3">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb mb-0 p-0">
                                    <li class="breadcrumb-item"><a href="{{route('project.datatable')}}"><i class="bx bx-home-alt"></i></a>
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
                                <a href="{{route('project.datatable')}}"  class="btn btn-dark px-5" >Volver a la tabla</a>
                            </div>
                            <hr/>
                            <div class="card border-top border-0 border-4 border-success">
                                <div class="card-body p-5">
                                    <div class="card-title d-flex align-items-center">
                                        <div><i class=""></i>
                                        </div>
                                        <h5 class="mb-0 text-success">Registrar Proyecto</h5>
                                    </div>
                                    <hr>
                                    <form method="POST" action="{{route('project.store')}}" class="row g-3" enctype="multipart/form-data">
                                        @csrf
                                        @method('POST')
                                        <div class="col-md-6 search-select-box">
                                            <label for="customer_id" class="form-label"><span class="required">* </span>ID del cliente</label>
                                            <select name="customer_id" class="form-control" id="customer_id">
                                                <option value="">Seleccionar cliente</option>
                                                @foreach($customers as $customer)
                                                    <option value="{{$customer->id}}"> {{$customer->id}} - {{$customer->name}} {{$customer->first_last_name}} {{$customer->second_last_name}}</option>
                                                @endforeach
                                            </select>
                                            @error('customer_id')
                                            <small>*{{$message}}</small>
                                            @enderror
                                        </div>

                                        <div class="col-md-6">
                                            <label for="project_image" class="form-label" >Fotografía del proyecto</label>
                                            <input class="form-control"
                                                   type="file"
                                                   name="image"
                                                   id="project_image"
                                                   value="{{old('image')}}">
                                                   @error('image')
                                                   <small>*{{$message}}</small>
                                                   @enderror
                                        </div>

                                        <div class="col-md-6">
                                            <label for="nombreProyecto" class="form-label"><span class="required">* </span>Nombre del proyecto</label>
                                            <input type="text"
                                                   class="form-control"
                                                   name="project_name"
                                                   id="nombreProyecto"
                                                   placeholder="Ingresar el nombre del proyecto"
                                                   value="{{old('project_name')}}">
                                                   @error('project_name')
                                                   <small>*{{$message}}</small>
                                                   @enderror
                                        </div>

                                        <div class="col-md-6">
                                            <label for="personaAcargo" class="form-label"><span class="required">* </span>Persona a cargo</label>
                                            <input type="text"
                                                   class="form-control"
                                                   name="in_charge"
                                                   id="personaAcargo"
                                                   placeholder="Ingresar persona a cargo"
                                                   value="{{old('in_charge')}}">
                                                   @error('in_charge')
                                                   <small>*{{$message}}</small>
                                                   @enderror
                                        </div>

                                        <div class="col-md-6">
                                            <label for="fechaInicio" class="form-label"><span class="required">* </span>Fecha de Inicio</label>
                                            <input class="result form-control"
                                                   name="start_date"
                                                   type="date"
                                                   id="fechaInicio"
                                                   value="{{old('start_date')}}">
                                                   @error('start_date')
                                                       <small>*{{$message}}</small>
                                                   @enderror
                                        </div>

                                        <div class="col-md-6">
                                            <label for="fechaFin" class="form-label">Fecha de Finalización</label>
                                            <input class="result form-control"
                                                   name="finish_date"
                                                   type="date"
                                                   id="fechaFin"
                                                   value="{{old('finish_date')}}">
                                                   @error('finish_date')
                                                       <small>*{{$message}}</small>
                                                   @enderror
                                        </div>

                                        <div class="col-md-6">
                                            <label for="presupuesto" class="form-label"><span class="required">* </span>Presupuesto</label><br>
                                            <input type="text"
                                                   class="form-control"
                                                   name="budget"
                                                   id="presupuesto"
                                                   placeholder="Ingresar presupuesto"
                                                   value="{{old('budget')}}">
                                                   @error('budget')
                                                       <small>*{{$message}}</small>
                                                   @enderror
                                        </div>


                                            <button type="submit" class="btn btn-success px-5">Agregar Proyecto</button>

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



