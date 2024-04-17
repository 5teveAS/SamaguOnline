		@extends("layouts.app")
		@section("wrapper")
            <div class="page-wrapper">
                <div class="page-content">
                    <!--breadcrumb-->
                    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                        <div class="breadcrumb-title pe-3">Modificar Gasto</div>
                        <div class="ps-3">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb mb-0 p-0">
                                    <li class="breadcrumb-item"><a href="{{ route('expense.datatable') }}"><i class="bx bx-home-alt"></i></a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Modificación</li>
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
                            <a href="{{ route('expense.datatable') }}"  class="btn btn-dark px-5" >Volver a la tabla</a>
                        </div>
                        <hr/>
                        <div class="card border-top border-0 border-4 border-primary">
                            <div class="card-body p-5">

                                <div class="card-title d-flex align-items-center">
                                    <div><i class=""></i>
                                    </div>
                                    <h5 class="mb-0 text-primary">Registrar Gastos</h5>
                                </div>
                                <hr>
                                <form method="post" action="{{route('expense.update', $expense->id)}}" class="row g-3" enctype="multipart/form-data">
                                    @csrf
                                    @method('PATCH')
                                    <div class="col-md-6 search-select-box">
                                        <label for="project_id" class="form-label"><span class="required">* </span>Nombre del proyecto</label>
                                        <select name="project_id" class="form-control" id="project_id">
                                            <option value="">Seleccionar un proyecto</option>
                                            @foreach($projects as $project)
                                                @if($project->id == $expense->project_id)
                                                    <option value="{{$project->id}}" selected> {{$project->id}} - {{$project->project_name}}</option>
                                                @else
                                                    <option value="{{$project->id}}"> {{$project->id}} - {{$project->project_name}}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                        @error('project_id')
                                        <small>*{{$message}}</small>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 search-select-box">
                                        <label for="bill_id" class="form-label"><span class="required">* </span>Numero de factura</label>
                                        <select name="bill_id" class="form-control" id="bill_id">
                                            <option value="">Seleccionar una factura</option>
                                            @foreach($bills as $bill)
                                                @if($bill->id == $expense->bill_id)
                                                    <option value="{{$bill->id}}" selected> {{$bill->id}} - {{$bill->bill_number}}</option>
                                                @else
                                                    <option value="{{$bill->id}}"> {{$bill->id}} - {{$bill->bill_number}}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                        @error('bill_id')
                                        <small>*{{$message}}</small>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label for="expense_name" class="form-label"><span class="required">* </span>Nombre del gasto</label>
                                        <input type="text"
                                               class="form-control"
                                               name="expense_name"
                                               id="expense_name"
                                               placeholder="Ingresar nombre del gasto"
                                               value="{{old('expense_name',$expense->expense_name)}}">
                                        @error('expense_name')
                                        <small>*{{$message}}</small>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label for="expense_description" class="form-label"><span class="required">* </span>Descripcion del gasto</label>
                                        <input type="text"
                                               class="form-control"
                                               name="expense_description"
                                               id="expense_description"
                                               placeholder="Ingresar descripción del gasto"
                                               value="{{old('expense_description',$expense->expense_description)}}">
                                        @error('expense_description')
                                        <small>*{{$message}}</small>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label for="unique_expense" class="form-label"><span class="required">* </span>Gasto Unico</label><br>
                                        <input type="text"
                                               class="form-control"
                                               name="unique_expense"
                                               id="unique_expense"
                                               placeholder="Ingresar gasto único"
                                               value="{{old('unique_expense', $expense->unique_expense)}}">
                                        @error('unique_expense')
                                        <small>*{{$message}}</small>
                                        @enderror
                                    </div>


                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary px-5">Modificar Gasto</button>
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



