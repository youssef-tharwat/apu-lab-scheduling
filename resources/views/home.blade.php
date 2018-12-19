@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{asset('css/fullcalandar/fullcalendar.css')}}">
    <link rel="stylesheet" href="{{asset('css/fullcalandar/scheduler.css')}}">
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
    </style>
@endsection

@section('content')
<div class="container" style="margin-top: 10em; margin-bottom: 10em;">
    <div id="calendar"></div>
</div>
@endsection

@section('js')

    <script type="text/javascript" src="{{asset('js/fullcalandar/moment.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/fullcalandar/fullcalendar.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/fullcalandar/scheduler.js')}}"></script>
    <script type="text/javascript">
        $(function() { // dom ready

            let todayDate = moment().startOf('day');
            let YESTERDAY = todayDate.clone().subtract(1, 'day').format('YYYY-MM-DD');
            let TODAY = todayDate.format('YYYY-MM-DD');
            let TOMORROW = todayDate.clone().add(1, 'day').format('YYYY-MM-DD');

            $('#calendar').fullCalendar({
                schedulerLicenseKey: 'CC-Attribution-NonCommercial-NoDerivatives',
                resourceAreaWidth: 230,
                handleWindowResize: true,
                weekends: false,
                eventOverlap:false,
                aspectRatio: 1.5,
                height:"auto",
                scrollTime: '00:00',
                header: {
                    left: 'promptResource today prev,next',
                    center: 'title',
                    right: 'timelineDay,timelineThreeDays,agendaWeek,month'
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
                events: {!! $jsonEvents !!},
                dayClick: function(date, jsEvent, view, resource) {
                    alert('clicked ' + date.format() + ' on resource ' + resource.id);
                },
                select: function(startDate, endDate, jsEvent, view, resource) {
                    alert('selected ' + startDate.format() + ' to ' + endDate.format() + ' on resource ' + resource.id);
                }
            });

        });

        // readjust sizing after font load
        $(window).on('load', function() {
            $('#calendar').fullCalendar('render');
        });
    </script>




@endsection
