
		@extends("layouts.app")
		@section("wrapper")
        <script>
    function alertaEliminar(){
        
        var statusConfirm = confirm("¿Realmente desea eliminar la factura?");
            if (statusConfirm == true)
            {
                window.location.href = "table-datatable-custumers";
                alert ("Factura eliminada");
                
            
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
                        <div class="breadcrumb-title pe-3">Eliminar Factura</div>
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
                            <h6 class="mb-0 text-uppercase">Eliminar Factura</h6>
                            <hr/>
                            <div class="card border-top border-0 border-4 border-danger">
                                <div class="card-body p-5">
                                    <div class="card-title d-flex align-items-center">
                                        <div><i class=""></i>
                                        </div>
                                        <h5 class="mb-0 text-danger">Eliminar Factura</h5>
                                    </div>
                                    <hr>
                                    <form class="row g-3">
                                        <div class="col-md-6">
                                            <label for="idBill" class="form-label">ID Factura</label>
                                            <input type="number" class="form-control" id="idBill" placeholder="Ingresar ID" required value="10231" readonly>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="billConcept" class="form-label">Concepto de Factura</label>
                                            <input type="text" class="form-control" id="billConcept" placeholder="Ingresar concepto de factura" required value="Clavos" readonly>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="descripcion" class="form-label">Descripción</label><br>
                                            <textarea class="form-control" id="descripcion" placeholder="Ingresar descripción" rows="3" required readonly>Clavos de 3 pulgadas</textarea>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="monto" class="form-label">Monto</label>
                                            <input class="result form-control" type="number" id="monto" placeholder="Ingresar monto" required value="2.000" readonly>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="fechaEmision" class="form-label">Fecha de Emision</label>
                                            <input class="result form-control" type="date" id="fechaEmision" required value="21/11/2021" readonly>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="estadoFactura" class="form-label" readonly>Estado de Factura</label >
                                            <select name="se" id="estadoFactura" class="form-control">
                                                <!--<option value="Cancelada">Cancelada</option>
                                                <option value="Proceso">En Proceso</option>
                                                -->
                                                <option value="Pendiente" readonly>Pendiente</option>
                                            </select>
                                        </div>
                                        <div class="col-12">
                                            <button type="eliminarFactura" class="btn btn-danger px-5" onclick="alertaEliminar();">Eliminar Factura</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                    <!--end row-->
                </div>
            </div>
		@endsection



