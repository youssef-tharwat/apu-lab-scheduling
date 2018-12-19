<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Event;
use MaddHatter\LaravelFullcalendar\Facades\Calendar;
class EventController extends Controller
{

    public function index()
    {
        $events = [];
        $data = Event::all();
        foreach ($data as $key => $event) {
            $t = 'T';

            $eventStartDate = substr_replace($event->start_date, $t, 11, 0);
            $eventEndDate = substr_replace($event->end_date, $t, 11, 0);

            $eventStartDate =  str_replace(' ', '', $eventStartDate);
            $eventEndDate =  str_replace(' ', '', $eventEndDate);

            $event = [
                'id' => $event->id,
                'resourceId' => $event->resource_id,
                'start' => $eventStartDate,
                'end' => $eventEndDate,
                'title' => $event->title,
            ];
            array_push($events, $event);
        }

        $jsonEvents = \GuzzleHttp\json_encode($events);

//        $calendar = Calendar::addEvents($events);
        return  $jsonEvents;
    }
}