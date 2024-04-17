
		@extends("layouts.app")
		@section("wrapper")
        <script>
    function alertaEliminar(){
        
        var statusConfirm = confirm("¿Realmente desea eliminar el empleado?");
            if (statusConfirm == true)
            {
                window.location.href = "table-datatable-empleados";
                alert ("Empleado eliminado");
                
            
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
                        <div class="breadcrumb-title pe-3">Eliminar Empleado</div>
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
                            <h6 class="mb-0 text-uppercase">Eliminar Empleado</h6>
                            <hr/>
                            <div class="card border-top border-0 border-4 border-danger">
                                <div class="card-body p-5">
                                    <div class="card-title d-flex align-items-center">
                                        <div><i class=""></i>
                                        </div>
                                        <h5 class="mb-0 text-danger">Eliminar Empleado</h5>
                                    </div>
                                    <hr>
                                    <form class="row g-3">
                                    <div class="col-md-6">
                                            <label for="fotografiaEmpleado" class="form-label">Fotografía del empleado</label>
                                            <input class="form-control" type="file" id="fotografiaProyecto" required>
                                        </div>
                                        <br>
                                        <div class="col-md-6">
                                            <label for="nombreEmpleado" class="form-label">Nombre del empleado</label>
                                            <input type="text" class="form-control" id="nombreEmpleado" placeholder="Ingresar nombre" required value="Andrey" readonly>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="primerApellido" class="form-label">Primer apellido</label>
                                            <input type="text" class="form-control" id="primerApellido" placeholder="Ingresar 1° apellido" required value="Espinoza" readonly>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="segundoApellido" class="form-label">Segundo apellido</label><br>
                                            <input type="text" class="form-control" id="segundoApellido" placeholder="Ingresar 2° apellido" required value="Rodriguez" readonly>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Sexo</label><br>
                                            <!--
                                                <label for="sexoEmpleado"><input type="radio"  name="sexo" id="sexoEmpleado" value="first_radio" required>   Masculino</label><br>
                                            -->
                                            <label for="sexoEmpleado2"><input type="radio"  name="sexo" id="sexoEmpleado2" value="second_radio" required readonly>   Femenino</label>
                                        </div>

                                        <div class="col-md-6">
                                            <label for="phone" class="form-label">Teléfono del empleado</label><br>
                                            <input type="tel" class="form-control" name="telefono" id="phone" placeholder="Ingresar teléfono" required value="7104-8102" readonly>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="phone2" class="form-label">Teléfono de emergencia</label><br>
                                            <input type="tel" class="form-control" name="phone" id="phone2" placeholder="Ingresar teléfono" required value="7104-8102" readonly>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="direccionExacta" class="form-label">Dirección exacta</label><br>
                                            <textarea class="form-control" id="direccionExacta"  placeholder="Ingresar dirección" rows="2" required readonly> San Pablo de Heredia</textarea>
                                        </div>
                                         <div class="col-md-6">
                                            <label for="email" class="form-label">Correo electrónico</label>
                                            <input type="text" class="form-control" id="email" placeholder="Ingresar correo electrónico" required value="aespinoza@ufide.ac.cr" readonly>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="enfermedadesAlergias" class="form-label">Enfermedades o alergias (opcional)</label><br>
                                            <textarea class="form-control" id="enfermedadesAlergias" placeholder="Ingresar enfermendades o alergias (opcional)" rows="2" readonly></textarea>
                                        </div>
                                       
                                        <div class="col-md-6">
                                            <label for="fechaIngreso" class="form-label">Fecha de ingreso</label>
                                            <input class="result form-control" type="date" id="fechaIngreso" required value="17/31/21" readonly>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="salary" class="form-label">Salario del empleado</label><br>
                                            <input type="number" class="form-control" name="telefono" id="salary" placeholder="Ingresar Salario" required value="5000.00" readonly>
                                        </div>
                                        <br>
                                       
                                      
                                        <div class="col-12">
                                            <button type="eliminarEmpleado" class="btn btn-danger px-5" onclick="alertaEliminar();">Eliminar Empleado</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                    <!--end row-->
                </div>
            </div>
		@endsection



