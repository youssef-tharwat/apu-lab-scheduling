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
    </style>
@endsection

@section('content')
    <div style="margin-top: 5em">

        @include('includes.left-panel')

        <div id="right-panel" class="right-panel">

            <div class="content mt-3">
                <div class="container">

                    <div class="card mt-lg-1">
                        <div class="card-body shadow-lg">

                            <div id="calendar"></div>
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

        jQuery(function() { // dom
            // document.getElementById("end").value

            let todayDate = moment().startOf('day');
            let YESTERDAY = todayDate.clone().subtract(1, 'day').format('YYYY-MM-DD');
            let TODAY = todayDate.format('YYYY-MM-DD');
            let TOMORROW = todayDate.clone().add(1, 'day').format('YYYY-MM-DD');

            jQuery('#calendar').fullCalendar({
                schedulerLicenseKey: 'CC-Attribution-NonCommercial-NoDerivatives',
                resourceAreaWidth: 230,
                handleWindowResize: true,
                weekends: false,
                eventOverlap:false,
                aspectRatio: 1.5,
                height:"auto",
                minTime:"08:00:00",
                maxTime:"20:00:00",
                scrollTime: '00:00',
                header: {
                    left: 'promptResource today prev,next',
                    center: 'title',
                    right: ''
                },
                defaultView: 'timelineDay',
                views: {
                    timelineThreeDays: {
                        type: 'timeline',
                        duration: { days: 3 }
                    }
                },
                resourceLabelText: 'Rooms',
                resources: [
                    { id: '1', title: 'Lab 1', eventColor: 'green'},
                    { id: '2', title: 'Lab 2', eventColor: 'blue' },
                    { id: '3', title: 'Lab 3', eventColor: 'red' },
                    { id: '4', title: 'Lab 4', eventColor: 'purple'},
                    { id: '5', title: 'Lab 5', eventColor: 'yellow' },
                    { id: '6', title: 'Lab 6', eventColor: 'orange' },

                ],
                events: {
                    url: '/home',
                    type: 'GET',
                    data: {
                        custom_param1: 'something',
                        custom_param2: 'somethingelse'
                    },
                    error: function() {
                        alert('there was an error while fetching events!');
                    },
                    color: 'yellow',   // a non-ajax option
                    textColor: 'black' // a non-ajax option
                },

            });


        });

        // readjust sizing after font load
        jQuery(window).on('load', function() {
            $('#calendar').fullCalendar('render');
        });

    </script>
@endsection





