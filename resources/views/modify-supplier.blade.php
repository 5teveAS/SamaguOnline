		@extends("layouts.app")
		@section("wrapper")
            <div class="page-wrapper">
                <div class="page-content">
                    <!--breadcrumb-->
                    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                        <div class="breadcrumb-title pe-3">Modificar Proveedor</div>
                        <div class="ps-3">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb mb-0 p-0">
                                    <li class="breadcrumb-item"><a href="{{ route('employee.datatable') }}"><i class="bx bx-home-alt"></i></a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Modificación</li>
                                </ol>
                            </nav>
                        </div>
                        <div class="ms-auto">
                            <div class="btn-group">
                                <div class="dropdown-menu dropdown-menu-4right dropdown-menu-lg-end">
                                    <div class="dropdown-divider"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end breadcrumb-->
                    <div class="row">
                        <div class="col-xl-7 mx-auto">
                            <div class="col-12">
                                <a href="{{ route('supplier.datatable') }}"  class="btn btn-dark px-5" >Volver a la tabla</a>
                            </div>
                            <hr/>
                            <div class="card border-top border-0 border-4 border-primary">
                                <div class="card-body p-5">
                                    <div class="card-title d-flex align-items-center">
                                        <div><i class=""></i>
                                        </div>
                                        <h5 class="mb-0 text-primary">Modificar Proveedor</h5>
                                    </div>
                                    <hr>
                                    <form method="post" action="{{route('supplier.update', $supplier->id)}}" class="row g-3" enctype="multipart/form-data">
                                        @csrf
                                        @method('PATCH')

                                        <div class="col-md-6">
                                            <label for="supplier_identification" class="form-label"><span class="required">* </span>Cédula</label>
                                            <input type="text"
                                                   class="form-control"
                                                   name="identification"
                                                   id="supplier_identification"
                                                   placeholder="Ingresar la cédula"
                                                   value="{{old('identification', $supplier->identification)}}">
                                                   @error('identification')
                                                   <small>*{{$message}}</small>
                                                   @enderror
                                        </div>

                                        <div class="col-md-6">
                                            <label for="supplier_legal_document" class="form-label"><span class="required">* </span>Cédula Jurídica</label>
                                            <input type="text"
                                                   class="form-control"
                                                   name="legal_document"
                                                   id="supplier_legal_document"
                                                   placeholder="Ingresar la cédula Jurídica"
                                                   value="{{old('legal_document', $supplier->legal_document)}}">
                                                   @error('legal_document')
                                                   <small>*{{$message}}</small>
                                                   @enderror
                                        </div>

                                        <div class="col-md-6">
                                            <label for="supplier_name" class="form-label"><span class="required">* </span>Nombre del proveedor</label>
                                            <input type="text"
                                                   class="form-control"
                                                   name="name"
                                                   id="supplier_name"
                                                   placeholder="Ingresar nombre"
                                                   value="{{old('name', $supplier->name)}}">
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
                                                   value="{{old('first_last_name', $supplier->first_last_name)}}">
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
                                                   value="{{old('second_last_name', $supplier->second_last_name)}}">
                                                   @error('second_last_name')
                                                   <small>*{{$message}}</small>
                                                   @enderror
                                        </div>

                                        <div class="col-md-6">
                                            <label for="supplier_phone" class="form-label"><span class="required">* </span>Teléfono del proveedor</label><br>
                                            <input type="text"
                                                   class="form-control"
                                                   name="phone"
                                                   id="supplier_phone"
                                                   placeholder="Ingresar teléfono"
                                                   value="{{old('phone',$supplier->phone)}}">
                                                   @error('phone')
                                                   <small>*{{$message}}</small>
                                                   @enderror
                                        </div>

                                        <div class="col-md-6">
                                            <label for="phone2" class="form-label"><span class="required">* </span>Teléfono de emergencia</label><br>
                                            <input type="text"
                                                   class="form-control"
                                                   name="second_phone"
                                                   id="phone2"
                                                   placeholder="Ingresar teléfono secundario"
                                                   value="{{old('second_phone',$supplier->second_phone)}}">
                                                   @error('second_phone')
                                                   <small>*{{$message}}</small>
                                                   @enderror
                                        </div>

                                        <div class="col-md-6">
                                            <label for="supplier_email" class="form-label"><span class="required">* </span>Correo electrónico</label>
                                            <input type="text"
                                                   class="form-control"
                                                   name="email"
                                                   id="supplier_email"
                                                   placeholder="Ingresar correo electrónico"
                                                   value="{{old('email', $supplier->email)}}"
                                                   autocomplete="new-email">
                                                   @error('email')
                                                   <small>*{{$message}}</small>
                                                   @enderror
                                        </div>

                                        <div class="col-md-6">
                                            <label for="companyName" class="form-label"><span class="required">* </span>Nombre de la empresa</label><br>
                                            <input type="text"
                                                   class="form-control"
                                                   name="company_name"
                                                   id="companyName"
                                                   placeholder="Ingresar nombre de la empresa"
                                                   value="{{old('company_name',$supplier->company_name)}}">
                                                   @error('company_name')
                                                   <small>*{{$message}}</small>
                                                   @enderror
                                        </div>

                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary px-5">Modificar Proveedor</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                    <!--end row-->
                </div>
            </div>
		@endsection



