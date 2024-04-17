		@extends("layouts.app")
		@section("wrapper")
            <div class="page-wrapper">
                <div class="page-content">
                    <!--breadcrumb-->
                    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                        <div class="breadcrumb-title pe-3">Modificar Factura</div>
                        <div class="ps-3">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb mb-0 p-0">
                                    <li class="breadcrumb-item"><a href="{{ route('bill.datatable') }}"><i class="bx bx-home-alt"></i></a>
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
                                <a href="{{ route('bill.datatable') }}"  class="btn btn-dark px-5" >Volver a la tabla</a>
                            </div>
                            <hr/>
                            <div class="card border-top border-0 border-4 border-primary">
                                <div class="card-body p-5">
                                    <div class="card-title d-flex align-items-center">
                                        <div><i class=""></i>
                                        </div>
                                        <h5 class="mb-0 text-primary">Modificar Factura</h5>
                                    </div>
                                    <hr>
                                    <form method="post" action="{{route('bill.update', $bill->id)}}" class="row g-3" enctype="multipart/form-data">
                                        @csrf
                                        @method('PATCH')
                                    <form class="row g-3">
                                        <div class="col-md-6">
                                            <label for="bill_number" class="form-label"><span class="required">* </span>Numero de Factura</label>
                                            <input type="text"
                                                   class="form-control"
                                                   name="bill_number"
                                                   id="bill_number"
                                                   placeholder="Ingresar el numero de factura"
                                                   value="{{old('bill_number', $bill->bill_number)}}">
                                                   @error('bill_number')
                                                   <small>*{{$message}}</small>
                                                   @enderror
                                        </div>
                                        
                                        <div class="col-md-6">
                                            <label for="concept" class="form-label"><span class="required">* </span>Concepto de Factura</label>
                                            <input type="text"
                                                   class="form-control"
                                                   name="bill_concept"
                                                   id="concept"
                                                   placeholder="Ingresar concepto de factura"
                                                   value="{{old('bill_concept', $bill->bill_concept)}}">
                                                   @error('bill_concept')
                                                   <small>*{{$message}}</small>
                                                   @enderror
                                    </div>

                                    <div class="col-md-6">
                                        <label for="description" class="form-label"><span class="required">* </span>Descripción de la Factura</label>
                                        <input type="text"
                                               class="form-control"
                                               name="description"
                                               id="description"
                                               placeholder="Ingresar descripcion de factura"
                                               value="{{old('description', $bill->description)}}">
                                               @error('description')
                                               <small>*{{$message}}</small>
                                               @enderror
                                </div>

                                <div class="col-md-6">
                                    <label for="amount" class="form-label"><span class="required">* </span>Monto de la Factura</label>
                                    <input type="text"
                                           class="form-control"
                                           name="amount"
                                           id="amount"
                                           placeholder="Ingresar el monto de la factura"
                                           value="{{old('amount', $bill->amount)}}">
                                           @error('amount')
                                           <small>*{{$message}}</small>
                                           @enderror
                            </div>

                            <div class="col-md-6">
                                <label for="date_" class="form-label"><span class="required">* </span>Fecha de Emision</label>
                                <input type="date"
                                       class="form-control"
                                       name="date_issue"
                                       id="date_"
                                       placeholder="Ingresar fecha de Emision"
                                       value="{{old('date_issue', $bill->date_issue)}}">
                                       @error('date_issue')
                                       <small>*{{$message}}</small>
                                       @enderror
                             </div>
                                    
                            <div class="col-md-6">
                                <label for="status" class="form-label"><span class="required">* </span>Estado de Factura</label>
                                <select name="bill_status" id="status" class="form-control">
                                                <option value="Cancelada" @if($bill->bill_status == 'Cancelada') selected @endif>Cancelada</option>
                                                <option value="Proceso" @if($bill->bill_status == 'Proceso') selected @endif>Proceso</option>
                                                <option value="Pendiente" @if($bill->bill_status == 'Pendiente') selected @endif>Pendiente</option>
                                            </select>

                                            @error('bill_status')
                                            <small>*{{$message}}</small>
                                            @enderror
                                        </div>
                                       
                                        <div class="col-12">
                                            <button type="modificarFactura" class="btn btn-primary px-5">Modificar Factura</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                    <!--end row-->
                </div>
            </div>
		@endsection



