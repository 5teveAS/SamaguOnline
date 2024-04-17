@extends("layouts.app")
@section("wrapper")
<script>
    function alertaEliminar(){
        
        var statusConfirm = confirm("¿Realmente desea eliminar el articulo del inventario?");
            if (statusConfirm == true)
            {
                window.location.href = "table-datatable-inventario";
                alert ("Articulo eliminado");
                
            
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
                <div class="breadcrumb-title pe-3">Eliminar Inventario</div>
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
                    <h6 class="mb-0 text-uppercase">Eliminar Inventario</h6>
                    <hr/>
                    <div class="card border-top border-0 border-4 border-danger">
                        <div class="card-body p-5">
                            <div class="card-title d-flex align-items-center">
                                <div><i class=""></i>
                                </div>
                                <h5 class="mb-0 text-danger">Eliminar Inventario</h5>
                            </div>
                            <hr>
                            <form class="row g-3">
                            <div class="col-md-6" style="display: none">
                                            <label for="fotografiaProyecto" class="form-label" >Fotografía del proyecto</label>
                                            <input class="form-control" type="file" id="fotografiaProyecto" required>
                                        </div>
                                        <br>
                                <div class="col-md-6">
                                    <label for="nombreProducto" class="form-label">Nombre del producto</label>
                                    <input type="text" class="form-control" id="nombreProducto" placeholder="Ingresar nombre" required value="Taladro" readonly>
                                </div>
                                <div class="col-md-6">
                                    <label for="tipo" class="form-label">Tipo</label>
                                    <input type="text" class="form-control" id="tipo" placeholder="Ingresar tipo" required value="Herramienta" readonly>
                                </div>
                                <div class="col-md-6">
                                    <label for="descripcion" class="form-label">Descripción</label><br>
                                    <textarea class="form-control" id="descripcion" rows="3" placeholder="Ingresar descripción" required readonly>Taladro Shindaiwa de 20V</textarea>
                                </div>
                                <div class="col-md-6">
                                    <label for="cantidad" class="form-label">Cantidad</label>
                                    <input type="number" class="form-control" id="cantidad" placeholder="Ingresar cantidad" required value="1" readonly>
                                </div>
                                <div class="col-md-6">
                                    <label for="costo" class="form-label">Costo</label>
                                    <input class="result form-control" type="number" id="costo" placeholder="Ingresar costo" required value="256.000" readonly>
                                </div>
                                <div class="col-12">
                                    <button type="eliminarInventario" class="btn btn-danger px-5" onclick="alertaEliminar();">Eliminar Inventario</button>
                                </div>
                            </form>
                        </div>
                    </div>
            <!--end row-->
        </div>
    </div>
@endsection



