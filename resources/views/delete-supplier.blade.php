
		@extends("layouts.app")
		@section("wrapper")
        <script>
    function alertaEliminar(){
        
        var statusConfirm = confirm("¿Realmente desea eliminar el proveedor?");
            if (statusConfirm == true)
            {
                window.location.href = "table-datatable-proveedores";
                alert ("Proveedor eliminado");
                
            
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
                        <div class="breadcrumb-title pe-3">Eliminar Proveedor</div>
                        <div class="ps-3">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb mb-0 p-0">
                                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
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
                            <h6 class="mb-0 text-uppercase">Eliminar Proveedor</h6>
                            <hr/>
                            <div class="card border-top border-0 border-4 border-danger">
                                <div class="card-body p-5">
                                    <div class="card-title d-flex align-items-center">
                                        <div><i class=""></i>
                                        </div>
                                        <h5 class="mb-0 text-danger">Eliminar Proveedor</h5>
                                    </div>
                                    <hr>
                                    <form class="row g-3">
                                    <div class="col-md-6" style="display: none">
                                            <label for="fotografiaProyecto" class="form-label" >Fotografía del proyecto</label>
                                            <input class="form-control" type="file" id="fotografiaProyecto" required>
                                        </div>
                                        <br>
                                        <div class="col-md-6">
                                            <label for="cedula" class="form-label">Cédula</label>
                                            <input type="text" class="form-control" id="cedula" placeholder="Ingresar cédula" required readonly value="4-123-1231">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="cedulaJuridica" class="form-label">Cédula jurídica</label>                                            
                                            <input type="text" class="form-control" id="cedulaJuridica" placeholder="Ingresar cédula jurídica" required readonly value="1-4123124123-1">
                                        </div>                                    
                                        <div class="col-md-6">
                                            <label for="nombre" class="form-label">Nombre</label>
                                            <input type="text" class="form-control" id="nombre" placeholder="Ingresar nombre" required readonly value="Andrey">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="primerApellido" class="form-label">Primer apellido</label>
                                            <input type="text" class="form-control" id="primerApellido" placeholder="Ingresar 1° apellido" required readonly value="Espinoza">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="segundoApellido" class="form-label">Segundo apellido</label>
                                            <input type="text" class="form-control" id="segundoApellido" placeholder="Ingresar 2° apellido" required readonly value="Rodriguez">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="segundoApellido" class="form-label">Telefono</label>
                                            <input type="text" class="form-control" id="segundoApellido" placeholder="Ingresar Telefono" required readonly value="87654321">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="segundoApellido" class="form-label">Telefono secundario</label>
                                            <input type="text" class="form-control" id="segundoApellido" placeholder="Ingresar telefono secundario" required readonly value="89764523">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="segundoApellido" class="form-label">Correo electrónico</label>
                                            <input type="text" class="form-control" id="segundoApellido" placeholder="Ingresar Correo electrónico" required readonly value="aespinoza@gmail.com">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="segundoApellido" class="form-label">Nombre de la empresa</label>
                                            <input type="text" class="form-control" id="segundoApellido" placeholder="Ingresar Nombre de la empresa" required readonly value="Ferreteria Jimenez">
                                        </div>
                                     
                                        <div class="col-12">
                                            <button type="eliminarProveedor" class="btn btn-danger px-5" onclick="alertaEliminar()">Eliminar Proveedor</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                    <!--end row-->
                </div>
            </div>
		@endsection



