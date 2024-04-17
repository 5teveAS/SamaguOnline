		@extends("layouts.app")
		@section("wrapper")
            <div class="page-wrapper">
                <div class="page-content">
                    <!--breadcrumb-->
                    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                        <div class="breadcrumb-title pe-3">Modificar Cliente</div>
                        <div class="ps-3">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb mb-0 p-0">
                                    <li class="breadcrumb-item"><a href="{{route('customer.datatable')}}"><i class="bx bx-home-alt"></i></a>
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
                                <a href="{{ route('customer.datatable') }}"  class="btn btn-dark px-5" >Volver a la tabla</a>
                            </div>
                            <hr/>
                            <div class="card border-top border-0 border-4 border-primary">
                                <div class="card-body p-5">
                                    <div class="card-title d-flex align-items-center">
                                        <div><i class=""></i>
                                        </div>
                                        <h5 class="mb-0 text-primary">Modificar Cliente</h5>
                                    </div>
                                    <hr>
                                    <form method="post" action="{{route('customer.update', $customer->id)}}" class="row g-3" enctype="multipart/form-data">
                                        @csrf
                                        @method('PATCH')

                                            <div class="col-md-6">
                                                <label for="customer_identification" class="form-label"><span class="required">* </span>Cédula del cliente</label>
                                                <input type="text"
                                                class="form-control"
                                                name="identification"
                                                id="customer_identification"
                                                placeholder="Ingresar cédula"
                                                value="{{old('identification',$customer->identification)}}">
                                                @error('identification')
                                                <small>*{{$message}}</small>
                                                @enderror
                                            </div>


                                        <br>
                                        <div class="col-md-6">
                                            <label for="customer_name" class="form-label"><span class="required">* </span>Nombre del cliente</label>
                                            <input type="text"
                                            class="form-control"
                                            name="name"
                                            id="customer_name"
                                            placeholder="Ingresar nombre"
                                            value="{{old('name',$customer->name)}}">
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
                                            value="{{old('first_last_name',$customer->first_last_name)}}">
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
                                            value="{{old('second_last_name',$customer->second_last_name)}}">
                                            @error('second_last_name')
                                            <small>*{{$message}}</small>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label for="customer_phone" class="form-label"><span class="required">* </span>Telefono</label><br>
                                            <input type="text"
                                            class="form-control"
                                            name="phone"
                                            id="customer_phone"
                                            placeholder="Ingresar telefono"
                                            value="{{old('phone',$customer->phone)}}">
                                            @error('phone')
                                            <small>*{{$message}}</small>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label for="customer_email" class="form-label"><span class="required">* </span>Correo electrónico</label><br>
                                            <input type="text"
                                            class="form-control"
                                            name="email"
                                            id="customer_email"
                                            placeholder="Ingresar correo electronico"
                                            value="{{old('email',$customer->email)}}"
                                            autocomplete="new-email">
                                            @error('email')
                                            <small>*{{$message}}</small>
                                            @enderror
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary px-5">Modificar Cliente</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                    <!--end row-->

                </div>

            </div>
		@endsection



