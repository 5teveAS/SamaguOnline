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
				<div class="breadcrumb-title pe-3">Módulos de Información</div>
				<div class="ps-3">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb mb-0 p-0">
							<li class="breadcrumb-item"><a href="{{route('customer.datatable')}}"><i class="bx bx-home-alt"></i></a>
							</li>
							<li class="breadcrumb-item active" aria-current="page">Clientes</li>
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

			<h6 class="mb-0 text-uppercase">Clientes</h6>
			<hr/>
			<div class="card">
				<div class="card-body">
                    @if(auth()->user()->role == 'Administrador')
				<a href="register-customer" class="btn btn-success shadow btn-xs sharp">Agregar<i class="fadeIn animated bx bx-plus"></i></a>
                    @endif
				<div style="margin-top: 10px">
					@if(session('message'))

					<div class="alert alert-danger">{{session('message')}}</div>

				@elseif(session('customer-created-message'))

					<div class="alert alert-success">{{session('customer-created-message')}}</div>

				@elseif(session('customer-updated-message'))

					<div class="alert alert-primary">{{session('customer-updated-message')}}</div>

				@endif
				</div>

					<div class="table-responsive">

						<table id="example2" class="table table-striped table-bordered">
							<thead>
								<tr>
									<th>Cédula</th>
									<th>Nombre</th>
									<th>Primer Apellido</th>
									<th>Segundo Apellido</th>
									<th>Telefono</th>
									<th>Correo electrónico</th>
                                    @if(auth()->user()->role == 'Administrador')
									<th>Acción</th>
                                    @endif
								</tr>
							</thead>
							<tbody>
								@foreach ($customers as $customer)
									<tr>

									<td>{{$customer->identification}}</td>
									<td>{{$customer->name}}</td>
									<td>{{$customer->first_last_name}}</td>
									<td>{{$customer->second_last_name}}</td>
									<td>{{$customer->phone}}</td>
									<td>{{$customer->email}}</td>
                                    @if(auth()->user()->role == 'Administrador')
									<td>


									<form method="post" action="{{route('customer.destroy', $customer->id)}}" enctype="multipart/form-data" class="delete-confirmation">
										@csrf
										@method('DELETE')
										<a class="btn btn-primary shadow btn-xs sharp mr-1" href="{{route('customer.edit', $customer->id)}}">Modificar<i class="fadeIn animated bx bx-edit-alt"></i></a>
										<button type="submit" class="btn btn-danger shadow btn-xs sharp">Eliminar<i class="lni lni-trash"></i></button>
									</form>
									</td>
                                        @endif
									</tr>
								@endforeach
							</tbody>
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
<script> /*delete-confirmation script*/

    $('.delete-confirmation').submit(function (e){
        e.preventDefault();

        Swal.fire({
            title: '¿Estas seguro?',
            html:'¡No podrás deshacer esto!<br>'+'Al eliminar un cliente se eliminará también su <span style="font-weight: bold;color: darkred">proyecto y gastos del proyecto<span>.',
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
