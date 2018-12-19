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

                <div class="card mt-lg-1">
                    <div class="card-body shadow-lg">
                        <h3 class="mb-lg-3">Submit Feedback</h3>
                        <form action="{{route('feedback.store')}}" id="createFeebackForm" method="post" class="">
                            @csrf

                            <div class="form-group">
                                <label for="subject" class=" form-control-label">Feedback Subject</label>
                                <input type="text" name="subject" placeholder="Seating" required class="form-control" />
                            </div>

                            <div class="form-group">
                                <label for="body" class=" form-control-label">Feedback Body</label>
                                <textarea rows="7" name="body" id="body" required class="form-control">

                                </textarea>
                            </div>

                            <button type="submit" id="addButton" class="btn btn-primary">
                                <i class="fa fa-check"></i> Submit
                            </button>

                        </form>
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





