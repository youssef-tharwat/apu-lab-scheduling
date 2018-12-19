@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="{{asset('dashboard-assets/vendors/themify-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('dashboard-assets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('dashboard-assets/vendors/selectFX/css/cs-skin-elastic.css')}}">
    <link rel="stylesheet" href="{{asset('dashboard-assets/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/fullcalandar/fullcalendar.css')}}">
    <link rel="stylesheet" href="{{asset('css/fullcalandar/scheduler.css')}}">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <style type="text/css">
        #calendar {
            max-width: 1500px;
            margin: 40px auto;
        }


        #wrap {
            width: 1100px;
            margin: 0 auto;
        }

        #external-events {
            float: left;
            width: 150px;
            padding: 0 10px;
            border: 1px solid #ccc;
            background: #eee;
            text-align: left;
        }

        #external-events h4 {
            font-size: 16px;
            margin-top: 0;
            padding-top: 1em;
        }

        #external-events .fc-event {
            margin: 10px 0;
            cursor: pointer;
        }

        #external-events p {
            margin: 1.5em 0;
            font-size: 11px;
            color: #666;
        }

        #external-events p input {
            margin: 0;
            vertical-align: middle;
        }

        #calendar > div.fc-view-container > div > table > tbody > tr > td.fc-time-area.fc-widget-content > div > div > div > div.fc-content > div > table > tbody > tr > td > div > div > a > div.fc-content > span{
            color: black;
        }

        a:focus, a:hover{
            color: white;
        }

        #bootstrap-data-table-export > tbody > tr > td:nth-child(5){
            text-align: center;
        }

        .table td, .table th{
            text-align: center;
        }
    </style>
@endsection

@section('content')
    <div style="margin-top: 5em">

        @include('includes.left-panel')

        <div id="right-panel" class="right-panel" style="width: 80%;">

            <div class="content mt-3">
                <div class="container">
                    <div class="card mt-lg-1">
                        <div class="card-body shadow-lg">
                            <h3 class="mb-lg-3">Schedule Lab</h3>
                            <form action="" id="createEventForm" method="post" class="">
                                @csrf
                                <div class="form-group">
                                    <label for="lab" class=" form-control-label">Lab</label>
                                    <select class="form-control" name="lab" id="lab" required>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="eventName" class=" form-control-label">Event Name</label>
                                    <input type="text" name="eventName" placeholder="Web Design Class" required class="form-control" />
                                </div>

                                <div class="form-group">
                                    <label for="start" class=" form-control-label">Start</label>
                                    <input type="datetime-local" name="start" id="start" required class="form-control" />
                                </div>

                                <div class="form-group">
                                    <label for="end" class=" form-control-label">End</label>
                                    <input type="datetime-local" name="end" id="end"  required class="form-control" />
                                </div>

                                <button type="submit" id="addButton" class="btn btn-primary">
                                    <i class="fa fa-check"></i> Add
                                </button>

                                <div class="sufee-alert alert with-close alert-success alert-dismissible fade" style="display:none; margin-top:1em;">
                                    <span class="badge badge-pill badge-success">Success</span>
                                    You successfully scheduled the lab.
                                    <button type="button" class="close"  aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>

                                <div class="sufee-alert alert with-close alert-danger alert-dismissible fade" style="display:none; margin-top:1em;">
                                    <span class="badge badge-pill badge-danger">Error!</span>
                                    Error Try again!
                                    <button type="button" class="close"  aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>

                            </form>
                        </div>
                    </div>
                    <div class="card shadow-lg">
                        <div class="card-header">
                            <strong class="card-title">Your Scheduled Labs</strong>
                        </div>
                        <div class="card-body">
                            <div id="bootstrap-data-table-export_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div id="bootstrap-data-table-export_filter" class="dataTables_filter">
                                            <label>Search:<input type="search" id="search"  class="form-control form-control-sm" placeholder="" aria-controls="bootstrap-data-table-export"></label>
                                        </div>
                                    </div>
                                </div>
                               <div class="row">
                                   <div class="col-sm-12">
                                       <table id="eventTable" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="bootstrap-data-table-export_info">

                                            <thead>
                                            <tr role="row">
                                                <th class="sorting_asc" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-sort="ascending"  >
                                                    Lab </th>
                                                <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1"  >
                                                    Event Name
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" >Start
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1"  >End
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1"  >Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                        @foreach($events as $event)
                                            <tr role="row" class="odd">
                                                <td class="sorting_1">{{$event->resource_id}}</td>
                                                <td>{{$event->title}}</td>
                                                <td>{{$event->start_date}}</td>
                                                <td>{{$event->end_date}}</td>
                                                <td>
                                                    {!! Form::open(['action' => ['ScheduleController@destroyEvent', $event->id ] , 'method' => 'POST']) !!}
                                                    {{Form::hidden('_method', 'DELETE')}}
                                                    {{Form::submit('Delete', ['class'=> 'btn btn-danger btn-sm'])}}
                                                    {!! Form::close() !!}

                                                </td>

                                            </tr>
                                        @endforeach
                                            </tbody>
                                        </table>
                                   </div>
                               </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div> <!-- .content -->
        </div><!-- /#right-panel -->
    </div>
@endsection
@section('js')
    <script type="text/javascript" src="{{asset('js/fullcalandar/moment.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/fullcalandar/fullcalendar.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/fullcalandar/scheduler.js')}}"></script>
    <script type="text/javascript">

        // readjust sizing after font load
        jQuery(window).on('load', function() {
            $('#calendar').fullCalendar('render');
        });



        jQuery(document).ready(function($) {

            $(document).on('keyup', '#search', function(){
                let query = $(this).val();
                fetch_customer_data(query);
            });

            function fetch_customer_data(query = '') {
                $.ajax({
                    url:"{{ route('schedule.search') }}",
                    method:'GET',
                    data:{query:query},
                    dataType:'json',
                    success:function(data)
                    {
                        $('#eventTable tbody').html(data.table_data);
                    }
                })
            }

            fetch_customer_data();


            // process the form
            $('#createEventForm').submit(function(event) {

                // get the form data
                // there are many ways to get this data using jQuery (you can use the class or id also)
                var formData = {
                    'lab'               : $('select[name=lab]').val(),
                    'eventName'         : $('input[name=eventName]').val(),
                    'start'             : $('input[name=start]').val(),
                    'end'               : $('input[name=end]').val(),
                    '_token'            : '{{ csrf_token() }}'
                };

                // process the form
                $.ajax({
                    type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
                    url         : '{{ route('schedule.store') }}', // the url where we want to POST
                    data        : formData, // our data object
                    dataType    : 'json', // what type of data do we expect back from the server
                    encode      : true,
                    success     : function(res){
                        if(!res.larger){

                            $('#calendar').fullCalendar( 'refetchEvents' );
                            document.getElementById('createEventForm').reset();
                            $('#createEventForm .alert-success').css('display', 'block');
                            $('#createEventForm .alert-success').addClass('show');
                        } else {
                            $('#createEventForm .alert-danger').css('display', 'block');
                            $('#createEventForm .alert-danger').addClass('show');
                        }
                    },
                    error: function (jqXHR, exception) {
                        $('#createEventForm .alert-danger').css('display', 'block');
                        $('#createEventForm .alert-danger').addClass('show');
                    }
                });

                // stop the form from submitting the normal way and refreshing the page
                event.preventDefault();
            });

            function successButtonDismiss() {
                $('.alert-success button').click(function(){
                    $(this).parent().css('display', 'none');
                });
            }

            function dangerButtonDismiss() {
                $('.alert-danger button').click(function(){
                    $(this).parent().css('display', 'none');
                });
            }

            successButtonDismiss();
            dangerButtonDismiss();


        });
    </script>
@endsection





