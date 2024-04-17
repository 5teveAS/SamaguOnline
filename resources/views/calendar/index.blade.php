 @extends("layouts.app")
			@section("wrapper")
            <div class="page-wrapper">
                <div class="page-content">
                    <head>
                        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
                        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
                    </head>
                     <!--breadcrumb-->
                    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                        <div class="breadcrumb-title pe-3">Aplicaciones</div>
                        <div class="ps-3">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb mb-0 p-0">
                                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Calendario</li>
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
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <!-- Button trigger modal -->
                                <button hidden type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">

                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="bookingModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                    <div class="modal-content">
                                        @csrf
                                        @method('PATCH')
                                        <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Título de Evento</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                        <input type="text" class="form-control" id="title">
                                        <span id="titleError" class="text-danger"></span>
                                        </div>
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                        <button type="button" id="saveBtn" class="btn btn-primary" onClick="window.location.reload(true)">Agendar Fecha</button>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div id='calendar'>


                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


		@endsection

@section("script")
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>
<script>
	$(document).ready(function() {

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        var booking = @json($events);

        $('#calendar').fullCalendar({
            header: {
                left: 'prev, next today',
                center: 'title',
                right:'month,agendaWeek,agendaDay',

            },
            events: booking,
            selectable: true,
            selectHelper: true,
            select: function(start, end, allDays){
                $('#bookingModal').modal('show');

                $('#saveBtn').click(function(){
                    var title = $('#title').val();
                    var start_date = moment(start).format('YYYY-MM-DD');
                    var end_date = moment(end).format('YYYY-MM-DD');

                    $.ajax({
                            url:"{{ route('calendar.store') }}",
                            type:"POST",
                            dataType:'json',
                            data:{ title, start_date, end_date},
                            success:function(response)
                            {
                                $('#bookingModal').modal('hide');
                                $('#calendar').fullCalendar('renderEvent', {
                                'title': response.title,
                                'start': response.start_date,
                                'end': response.end_date,

                                });
                            },

                            error:function(error)
                            {
                                if(error.responseJSON.errors){
                                    $('#titleError').html(error.responseJSON.errors.title)
                             }
                        },
                    });
                });
              },

           /* editable: true,*/
            eventDrop: function(event) {
                   console.log(event)
                   var id = event.id;
                   var start_date = moment(event.start).format('YYYY-MM-DD');
                   var end_date = moment(event.end).format('YYYY-MM-DD');

                   $.ajax({
                            url:"{{ route('calendar.update', '') }}" +'/'+ id,
                            type:"PATCH",
                            dataType:'json',
                            data:{ start_date, end_date},
                            success:function(response)
                            {
                                console.log(response)
                            },
                            error:function(error)
                            {
                                console.log(error)
                        },
                    });
                },
                eventClick: function(event){
                    var id = event.id;

                    if(confirm('Seguro que quieres eliminar el evento?')){
                        $.ajax({
                            url:"{{ route('calendar.destroy', '') }}" +'/'+ id,
                            type:"DELETE",
                            dataType:'json',
                            success:function(response)
                            {
                                $('#calendar').fullCalendar('removeEvents',response);
                                swal("Eliminaste el evento")
                            },
                            error:function(error)
                            {
                                console.log(error);
                            },
                        });
                    }
                },
            });

            $("#bookingModal").on("hidden.bs.modal", function () {
                $('#saveBtn').unbind();
            });

            $('.fc-event').css('font-size', '12px')
        });
</script>
@endsection
