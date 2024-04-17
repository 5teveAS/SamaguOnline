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
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Proyectos</li>
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
				<h6 class="mb-0 text-uppercase">Proyectos</h6>
				<hr/>
				<div class="card">
					<div class="card-body">
                        @if(auth()->user()->role == 'Administrador')
					<a  href="{{route('project.create')}}" class="btn btn-success shadow btn-xs sharp">Agregar<i class="fadeIn animated bx bx-plus"></i></a>
                        @endif
						<div class="table-responsive">
							<div style="margin-top: 10px">
								@if(session('message'))

								<div class="alert alert-danger">{{session('message')}}</div>

							@elseif(session('project-created-message'))

								<div class="alert alert-success">{{session('project-created-message')}}</div>

							@elseif(session('project-updated-message'))

								<div class="alert alert-primary">{{session('project-updated-message')}}</div>

							@endif
							</div>

							<table id="example2" class="table table-striped table-bordered">
								<thead>
									<tr>
										<th>Fotografía del proyecto</th>
										<th>Nombre del proyecto</th>
										<th>Cliente</th>
										<th>Persona encargada</th>
										<th>Fecha de inicio</th>
										<th>Fecha de Finalización</th>
										<th>Presupuesto</th>
                                        @if(auth()->user()->role == 'Administrador')
										<th>Acción</th>
                                        @endif
									</tr>
								</thead>
								<tbody>
									@foreach ($projects as $project)
									<tr>

										<td><img height="70px" width="70px" src="{{$project->image}}" alt="-Sin imagen"></td>
										<td>{{$project->project_name}}</td>
										@foreach ($customers as $customer)
											 @if($customer->id == $project->customer_id)
                                            <td>{{$customer->name}} {{$customer->first_last_name}} {{$customer->second_last_name}}</td>
                                            @endif
										@endforeach

										<td>{{$project->in_charge}}</td>
										<td>{{ \Carbon\Carbon::parse($project->start_date)->format('d/m/y')}}</td>
										@if ($project->finish_date == null)
										<td>Sin finalizar</td>
										@else
											<td>{{ \Carbon\Carbon::parse($project->finish_date)->format('d/m/y')}}</td>
										@endif
										<td>₡{{number_format($project->budget, 2) }}</td>
                                        @if(auth()->user()->role == 'Administrador')
										<td>
										<form method="post" action="{{route('project.destroy', $project->id)}}" enctype="multipart/form-data" class="delete-confirmation">
											@csrf
											@method('DELETE')
											<a class="btn btn-primary shadow btn-xs sharp mr-1" href="{{route('project.edit', $project->id)}}">Modificar<i class="fadeIn animated bx bx-edit-alt"></i></a>
											<button type="submit" class="btn btn-danger shadow btn-xs sharp">Eliminar<i class="lni lni-trash"></i></button>
										</form>
										</td>
                                        @endif
										</tr>
										@endforeach
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
	<script> /*Delete-confirmation script*/

		$('.delete-confirmation').submit(function (e){
			e.preventDefault();

			Swal.fire({
				title: '¿Estas seguro?',
                html:'¡No podrás deshacer esto!<br>'+'Al eliminar un proyecto se eliminará también sus <span style="font-weight: bold;color: darkred">gastos<span>.',
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
