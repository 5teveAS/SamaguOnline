@extends("layouts.app")
@section("wrapper")
    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Inventario</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="{{ route('inventory.datatable') }}"><i class="bx bx-home-alt"></i></a>
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
                        <a href="{{ route('inventory.datatable') }}"  class="btn btn-dark px-5" >Volver a la tabla</a>
                    </div>
                <hr/>

                    <div class="card border-top border-0 border-4 border-success">
                        <div class="card-body p-5">
                            <div class="card-title d-flex align-items-center">
                                <div><i class=""></i>
                                </div>
                                <h5 class="mb-0 text-success">Registrar Producto</h5>
                            </div>
                            <hr>
                            <form method="POST" action="{{route('inventory.store')}}" class="row g-3" enctype="multipart/form-data">
                                @csrf
                                @method('POST')

                                <div class="col-md-6">
                                    <label for="p_name" class="form-label"><span class="required">* </span>Nombre del producto</label>
                                    <input type="text"
                                    class="form-control"
                                    name="product_name"
                                    id="p_name"
                                    placeholder="Ingresar nombre"
                                    value="{{old('product_name')}}">
                                    @error('product_name')
                                    <small>*{{$message}}</small>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label for="inventory_type" class="form-label"><span class="required">* </span>Tipo del producto</label>
                                    <input type="text"
                                    class="form-control"
                                    name="type"
                                    id="inventory_type"
                                    placeholder="Ingresar tipo"
                                    value="{{old('type')}}">
                                    @error('type')
                                    <small>*{{$message}}</small>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label for="inventory_description" class="form-label"><span class="required">* </span>Descripción del producto</label>
                                    <input type="text"
                                    class="form-control"
                                    name="description"
                                    id="inventory_description"
                                    placeholder="Ingresar descripción"
                                    value="{{old('description')}}">
                                    @error('description')
                                    <small>*{{$message}}</small>
                                    @enderror

                                </div>
                                <div class="col-md-6">
                                    <label for="inventory_quantity" class="form-label"><span class="required">* </span>Cantidad</label>
                                    <input type="text"
                                    class="form-control"
                                    name="quantity"
                                    id="inventory_quantity"
                                    placeholder="Cantidad"
                                    value="{{old('quantity')}}">
                                    @error('quantity')
                                    <small>*{{$message}}</small>
                                    @enderror

                                </div>
                                <div class="col-md-6">
                                    <label for="inventory_cost" class="form-label"><span class="required">* </span>Costo</label><br>
                                    <input type="text"
                                    class="form-control"
                                    name="cost"
                                    id="inventory_cost"
                                    placeholder="Costo del producto"
                                    value="{{old('cost')}}">
                                    @error('cost')
                                    <small>*{{$message}}</small>
                                    @enderror

                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-success px-5">Agregar Producto</button>
                                </div>
                            </form>
                        </div>
                    </div>
            <!--end row-->

        </div>
                
    </div>
@endsection

