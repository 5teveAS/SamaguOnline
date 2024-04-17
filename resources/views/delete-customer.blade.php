		
		@extends("layouts.app")
		@section("wrapper")
        <script>
    function alertaEliminar(){
        
        var statusConfirm = confirm("¿Realmente desea eliminar el Cliente?");
            if (statusConfirm == true)
            {
                window.location.href = "table-datatable-clientes";
                alert ("Proyecto eliminado");
                
            
            }
            else
            {
                alert("Eliminación cancelada");
            }     
    }
</script>
            <div class="page-wrapper">
                <div class="page-content">
                    <!--breadcrumb-->
                    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                        <div class="breadcrumb-title pe-3">Eliminar Cliente</div>
                        <div class="ps-3">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb mb-0 p-0">
                                    <li class="breadcrumb-item"><a href="{{route('customer.datatable')}}"><i class="bx bx-home-alt"></i></a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Eliminación</li>
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
                            <h6 class="mb-0 text-uppercase">Eliminar Cliente</h6>
                            <hr/>
                            <div class="card border-top border-0 border-4 border-danger">
                                <div class="card-body p-5">
                                    <div class="card-title d-flex align-items-center">
                                        <div><i class=""></i>
                                        </div>
                                        <h5 class="mb-0 text-danger">Eliminar Cliente</h5>
                                    </div>
                                    <hr>
                                    <form class="row g-3">
                                    <div class="col-md-6" style="display: none">
                                            <label for="fotografiaProyecto" class="form-label" >Fotografía del proyecto</label>
                                            <input class="form-control" type="file" id="fotografiaProyecto" required>
                                        </div>
                                        <br>
                                        <div class="col-md-6">
                                            <label for="cedulaCliente" class="form-label">Cédula del cliente</label>
                                          
                                            <input type="text" class="form-control" id="cedulaCliente" placeholder="Ingresar cédula" value="4-1231-1311"  readonly>
                                        </div>
                                        <br>
                                        <div class="col-md-6">
                                            <label for="nombreCliente" class="form-label">Nombre del cliente</label>
                                            <input type="text" class="form-control" id="nombreCliente" placeholder="Ingresar nombre" value="Tigger" readonly>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="primerApellido" class="form-label">Primer apellido</label>
                                            <input type="text" class="form-control" id="primerApellido" placeholder="Ingresar 1° apellido" value="Nixon" readonly>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="segundoApellido" class="form-label">Segundo apellido</label><br>
                                            <input type="text" class="form-control" id="segundoApellido" placeholder="Ingresar 2° apellido" value = "Wallas" readonly>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="segundoApellido" class="form-label">Telefono</label><br>
                                            <input type="text" class="form-control" id="segundoApellido" placeholder="Ingresar Telefono"  value= "88229933" readonly>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="segundoApellido" class="form-label">Correo electrónico</label><br>
                                            <input type="text" class="form-control" id="segundoApellido" placeholder="Ingresar Correo electrónico" value="NixonW@gmail.com" readonly>
                                        </div>
                                        <div class="col-12">
                                            <button type="eliminarCliente" class="btn btn-danger px-5" onclick="alertaEliminar();" >Eliminar Cliente</button>
                                        </div>
                                   

                                    </form>
                                </div>
                            </div>
                    <!--end row-->
                </div>
            </div>
		@endsection



