	@extends("layouts.app")

	@section("style")
	<link href="assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
	@endsection

		@section("wrapper")
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Facturas Emitidas</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Facturas</li>
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
				<h6 class="mb-0 text-uppercase">Facturas</h6>
				<hr/>
				<div class="card">
					<div class="card-body">
                        @if(auth()->user()->role == 'Administrador')
					<a href="register-bill" class="btn btn-success shadow btn-xs sharp">Agregar<i class="fadeIn animated bx bx-plus"></i></a>
                        @endif
					<div style="margin-top: 10px">
						@if(session('message'))

						<div class="alert alert-danger">{{session('message')}}</div>

					@elseif(session('bill-created-message'))

						<div class="alert alert-success">{{session('bill-created-message')}}</div>

					@elseif(session('bill-updated-message'))

						<div class="alert alert-primary">{{session('bill-updated-message')}}</div>

					@endif

					</div>
						<div class="table-responsive">
							<table id="example2" class="table table-striped table-bordered">
								<thead>
									<tr>
										<th>ID Factura</th>
										<th>Concepto de Factura</th>
										<th>Descripcion</th>
										<th>Monto</th>
										<th>Fecha de emision</th>
										<th>Estado Factura</th>
                                        @if(auth()->user()->role == 'Administrador')
										<th>Acción</th>
                                        @endif
									</tr>
								</thead>
								<tbody>
									@foreach($bills as $bill)
									<tr>
										<td>{{$bill->bill_number}}</td>
										<td>{{$bill->bill_concept}}</td>
										<td>{{$bill->description}}</td>
										<td>₡{{ number_format($bill->amount, 2 ) }}</td>
										<td>{{ \Carbon\Carbon::parse($bill->date_issue)->format('d/m/Y')}}</td>
										<td>{{$bill->bill_status}}</td>
                                        @if(auth()->user()->role == 'Administrador')
									<td>
										<form method="post" action="{{route('bill.destroy', $bill->id)}}" enctype="multipart/form-data" class="delete-confirmation">
											@csrf
											@method('DELETE')
											<a class="btn btn-primary shadow btn-xs sharp" href="{{route('bill.edit', $bill->id)}}">Modificar<i class="fadeIn animated bx bx-edit-alt"></i></a>

											<button type="submit" class="btn btn-danger shadow btn-xs sharp">Eliminar<i class="lni lni-trash"></i></button>
										</form>
									</td>
                                        @endif
									</tr>
									@endforeach
								</td>
								</tr>
								</tbody>

								</tfoot>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--end page wrapper -->
		@endsection

	@section("script")
	<script src="assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
	<script src="assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> /*delete-confirmation script*/
	<script>
		$(document).ready(function() {
			$('#example').DataTable();
		  } );
	</script>
	<script>
		$(document).ready(function() {
			var table = $('#example2').DataTable( {
				lengthChange: false,
				buttons: [ 'copy', 'excel', 'pdf', 'print']
			} );

			table.buttons().container()
				.appendTo( '#example2_wrapper .col-md-6:eq(0)' );
		} );
	</script>
	<script>
		$(document).ready(function(){
			$("tr").each(function(){
				$(this).children("td").each(function(){
					switch ($(this).html()) {
						case 'Cancelada':
							$(this).css("background-color", "#2e962a");
							$(this).css("border-width", "4px");
							$(this).css("color", "white");
						break;
						case 'Proceso':
							$(this).css("background-color", "#dbc900");
							$(this).css("border-width", "4px");
							$(this).css("color", "white");
						break;
						case 'Pendiente':
							$(this).css("background-color", "#c93528");
							$(this).css("border-width", "4px");
							$(this).css("color", "white");
						break;
					}
				})
			})
		});
		</script>
    <script> /*delete-confirmation script*/

        $('.delete-confirmation').submit(function (e){
            e.preventDefault();

            Swal.fire({
                title: '¿Estas seguro?',
                html:'¡No podrás deshacer esto!<br>'+'Al eliminar una factura se eliminará también sus <span style="font-weight: bold;color: darkred">gastos<span>.',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, eliminar!',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire(
                        'Eliminado!',
                        'Los datos fueron eliminados',
                        'success',

                    )
                    this.submit();
                }
            })
        });

    </script>
	@endsection
