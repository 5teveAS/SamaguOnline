
		@extends("layouts.app")
		@section("wrapper")
        <script>
    function alertaEliminar(){
        
        var statusConfirm = confirm("¿Realmente desea eliminar el proyecto?");
            if (statusConfirm == true)
            {
                window.location.href = "table-datatable-proyectos";
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
                        <div class="breadcrumb-title pe-3">Eliminar Proyecto</div>
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
                            <h6 class="mb-0 text-uppercase">Eliminar Proyecto</h6>
                            <hr/>
                            <div class="card border-top border-0 border-4 border-danger">
                                <div class="card-body p-5">
                                    <div class="card-title d-flex align-items-center">
                                        <div><i class=""></i>
                                        </div>
                                        <h5 class="mb-0 text-danger">Eliminar Proyecto</h5>
                                    </div>
                                    <hr>
                                    <form class="row g-3">
                                        <div class="col-md-6">
                                            <label for="fotografiaProyecto" class="form-label">Fotografía del proyecto</label>
                                            <input class="form-control" type="file" id="fotografiaProyecto" required>
                                        </div>
                                        <br>
                                        <div class="col-md-6">
                                            <label for="nombreProyecto" class="form-label">Nombre del proyecto</label>
                                            <input type="text" class="form-control" id="nombreProyecto" placeholder="Ingresar nombre" value="Samagu Key" required readonly>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="personaAcargo" class="form-label">Persona a cargo</label>
                                            <input type="text" class="form-control" id="personaAcargo" placeholder="Ingresar persona" value="Jose David Rodriguez Arce" required readonly>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="gastos" class="form-label">Gastos del proyecto</label><br>
                                            <a  href="#" class="btn btn-danger shadow btn-xs sharp">Ver Gastos<i class="fadeIn animated bx bx-import"></i></a>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="fechaInicio" class="form-label">Fecha de Inicio</label>
                                            <input class="result form-control" type="date" id="fechaInicio"  required readonly>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="fechaFin" class="form-label">Fecha de Finalización</label>
                                            <input class="result form-control" type="date" id="fechaFin" readonly>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="presupuesto" class="form-label">Presupuesto</label>
                                            <input class="result form-control" type="number" id="presupuesto" placeholder="Ingresar presupuesto" value="$320,800" required readonly>
                                        </div>
                                        <div class="col-12">
                                            <button type="eliminarProyecto" class="btn btn-danger px-5" onclick="alertaEliminar()">Eliminar Proyecto</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                    <!--end row-->
                </div>
            </div>
		@endsection



