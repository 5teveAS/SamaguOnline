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
					<div class="breadcrumb-title pe-3">Usuarios del Sistema</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Usuarios</li>
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
				<h6 class="mb-0 text-uppercase">Usuarios</h6>
				<hr/>
				<div class="card">
					<div class="card-body">
                        @if(auth()->user()->role == 'Administrador')
					<a href="{{route('user.create')}}" class="btn btn-success shadow btn-xs sharp">Agregar<i class="fadeIn animated bx bx-plus"></i></a>
                        @endif
                        <div style="margin-top: 10px">
                            @if(session('message'))

                                <div class="alert alert-danger">{{session('message')}}</div>

                            @elseif(session('user-created-message'))

                                <div class="alert alert-success">{{session('user-created-message')}}</div>

                            @elseif(session('user-updated-message'))

                                <div class="alert alert-primary">{{session('user-updated-message')}}</div>

                            @endif
                        </div>
                        <div class="table-responsive">
						</br>
							<table id="example2" class="table table-striped table-bordered">
								<thead>
									<tr>
                                        <th>Avatar</th>
										<th>ID Empleado</th>
										<th>Nombre de usuario</th>
										<th>Correo Electronico</th>
										<th>Rol</th>
                                        @if(auth()->user()->role == 'Administrador')
                                        <th>Acción</th>
                                         @endif
								</thead>
								<tbody>
                                @foreach($users as $user)
                                    <tr>

                                        <td><img height="70px" width="70px" src="{{$user->image}}" alt="-Sin avatar"></td>
                                        <td>
                                            @foreach($employees as $employee)
                                                @if($employee->id == $user->employee_id)
                                                    <a>{{$user->employee_id}} - Ced:{{$employee->identification}}</a>
                                                @endif
                                            @endforeach
                                        </td>
                                        <td>{{$user->user_name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->role}}</td>
                                        @if(auth()->user()->role == 'Administrador')
                                        <td>
                                            {{--									<div style="justify-content: center">--}}
                                            {{--									<a href="modify-employee" class="btn btn-primary shadow btn-xs sharp mr-1">Modificar<i class="fadeIn animated bx bx-edit-alt"></i></a>--}}
                                            {{--									<a href="delete-employee" class="btn btn-danger shadow btn-xs sharp">Eliminar<i class="lni lni-trash"></i></a>--}}
                                            {{--									</div>--}}
{{--                                            @if($user->role == 'Administrador')--}}

                                            <form method="post" action="{{route('user.destroy', $user->id)}}" enctype="multipart/form-data" class="delete-confirmation">
                                                @csrf
                                                @method('DELETE')
                                                <a class="btn btn-primary shadow btn-xs sharp" href="{{route('user.edit', $user->id)}}">Modificar<i class="fadeIn animated bx bx-edit-alt"></i></a>

                                                <button type="submit" class="btn btn-danger shadow btn-xs sharp"  @if($user->id == 1) disabled @endif>Eliminar<i class="lni lni-trash"></i></button>
                                            </form>
{{--                                            @endif--}}
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
    <script>
        $('.delete-confirmation').submit(function (e){
            e.preventDefault();

            Swal.fire({
                title: '¿Estas seguro?',
                text:'¡No podrás deshacer esto!',
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
