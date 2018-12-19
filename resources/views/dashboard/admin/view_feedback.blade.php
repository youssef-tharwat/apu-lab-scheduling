@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="{{asset('dashboard-assets/vendors/themify-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('dashboard-assets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('dashboard-assets/assets/css/style.css')}}">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <style type="text/css">
        a:focus, a:hover{
            color: white;
        }
    </style>
@endsection
@section('content')
    <div style="margin-top: 5em">

        @include('includes.left-panel')

        <div id="right-panel" class="right-panel" style="width: 80%;">
            <div class="content mt-3">
                <div class="card shadow-lg">
                    <div class="card-header">
                        <strong class="card-title">Your Scheduled Labs</strong>
                    </div>
                    <div class="card-body">
                        <div id="bootstrap-data-table-export_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="eventTable" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="bootstrap-data-table-export_info">

                                        <thead>
                                        <tr role="row">
                                            <th class="sorting_asc" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-sort="ascending"  >
                                                User ID </th>
                                            <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1"  >
                                                Subject
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" >Body
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($feedbacks as $feedback)
                                            <tr role="row" class="odd">
                                                <td class="sorting_1">{{$feedback->user_id}}</td>
                                                <td>{{$feedback->subject}}</td>
                                                <td>{{$feedback->body}}</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
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
    <script src="{{asset('dashboard-assets/assets/js/main.js')}}"></script>
    <script src="{{asset('dashboard-assets/assets/js/dashboard.js')}}"></script>
@endsection





