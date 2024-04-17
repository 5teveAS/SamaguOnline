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
					<div class="breadcrumb-title pe-3">Gastos</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Gastos</li>
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
				<h6 class="mb-0 text-uppercase">Gastos</h6>
				<hr/>
				<div class="card">
					<div class="card-body">
                        @if(auth()->user()->role == 'Administrador')
					<a href="{{route('expense.create')}}" class="btn btn-success shadow btn-xs sharp">Agregar<i class="fadeIn animated bx bx-plus"></i></a>
                        @endif
                        <div style="margin-top: 10px">
                            @if(session('message'))

                                <div class="alert alert-danger">{{session('message')}}</div>

                            @elseif(session('expense-created-message'))

                                <div class="alert alert-success">{{session('expense-created-message')}}</div>

                            @elseif(session('expense-updated-message'))

                                <div class="alert alert-primary">{{session('expense-updated-message')}}</div>

                            @endif
                        </div>
                        <div class="table-responsive">
						</br>
							<table id="example2" class="table table-striped table-bordered">
								<thead>
									<tr>
                                        <th>Nombre del gasto</th>
										<th>Descripcion</th>
										<th>Numero de factura</th>
										<th>Nombre del proyecto</th>
										<th>Gasto Unico</th>
                                        @if(auth()->user()->role == 'Administrador')
										<th>Acción</th>
                                        @endif

									</tr>
								</thead>
								<tbody>
									@foreach($expenses as $expense)
                                    <tr>
                                        <td>{{$expense->expense_name}}</td>
                                        <td>{{$expense->expense_description}}</td>
                                        <td>
											@foreach($bills as $bill)
												@if($bill->id == $expense->bill_id)
											{{$bill->id}}
												@endif
											@endforeach
										</td>
										<td>
											@foreach($projects as $project)
												@if($project->id == $expense->project_id)
											{{$project->project_name}}
												@endif
											@endforeach
										</td>
										<td>₡{{number_format($expense->unique_expense, 2) }}</td>
                                        @if(auth()->user()->role == 'Administrador')
                                        <td>

                                            <form method="post" action="{{route('expense.destroy', $expense->id)}}" enctype="multipart/form-data" class="delete-confirmation">
                                                @csrf
                                                @method('DELETE')
                                                <a class="btn btn-primary shadow btn-xs sharp" href="{{route('expense.edit', $expense->id)}}">Modificar<i class="fadeIn animated bx bx-edit-alt"></i></a>

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
                text: "¡No podrás deshacer esto!",
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
