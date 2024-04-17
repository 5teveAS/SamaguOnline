		@extends("layouts.app")
		@section("wrapper")
            <div class="page-wrapper">
                <div class="page-content">
                    <!--breadcrumb-->
                    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                        <div class="breadcrumb-title pe-3">Calculadora de Liquidaciones</div>
                        <div class="ps-3">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb mb-0 p-0">
                                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Calculadora</li>
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
                            <h6 class="mb-0 text-uppercase">Calcular Liquidación</h6>
                            <hr/>
                            <div class="card border-top border-0 border-4 border-success">
                                <div class="card-body p-5">
                                    <div class="card-title d-flex align-items-center">
                                        <div><i class=""></i>
                                        </div>
                                        <h5 class="mb-0 text-success">Calcular Liquidación</h5>
                                    </div>
                                    <hr>
                                    <form class="row g-3" >
                                        <div class="col-md-6">
                                            <label class="form-label">Suma de salarios</label>
                                            <input type="number" class="form-control" id="valor1" name="valor1" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Salario por hora</label>
                                            <input type="number" class="form-control" id="valor2" name="valor2" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Salario semanal</label>
                                            <input type="number" class="form-control" id="valor3" name="valor3" required>
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-success px-5">Calcular Liquidación</button>
                                        </div>

                                        <div class="col-md-6">
                                            <h4>El resultado de la liquidación es:</h4>
                                        <?php
                                            if(isset($_GET['valor1']) && isset($_GET['valor2']) && isset($_GET['valor3'])){

                                            //First step of the formula
                                               $resultFirststep  = $_GET['valor1'] / $_GET['valor3'];

                                            //Second step of the formula
                                               $firstData = 8;
                                               $resultFirstData = $_GET['valor2'] * $firstData;
                                               $secondData = 3;
                                               $resultSecondStep = $resultFirstData * $secondData / 4;

                                            //Final result
                                                $result = $resultSecondStep * $resultFirststep;
                                               echo "<table>";
                                               echo "<tr class='form-control'>";
                                               echo "<td style='border: 1px solid green' class='form-control'>";
                                               echo "₡" .htmlspecialchars(number_format($result, 2 ));
                                               echo "</td>";
                                               echo "</tr>";
                                               echo "</table>";
                                            }else {
                                               echo "<table>";
                                               echo "<tr class='form-control'>";
                                               echo "<td style='border: 1px solid black' class='form-control'>";
                                               echo "Esperando que el usuario ingrese los valores";
                                               echo "</td>";
                                               echo "</tr>";
                                               echo "</table>";
                                            }
                                        ?>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <script src="public\js\liquidaciones.js"></script>
                    <!--end row-->
                </div>
            </div>
		@endsection



