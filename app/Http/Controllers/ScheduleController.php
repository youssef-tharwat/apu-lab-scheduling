<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class ScheduleController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        $events = Event::whereuser_id(Auth::user()->id)->get();

        return view('dashboard.schedule')->with('events', $events);

    }

    public function store(Request $request){

        $exists = null;

        $data = Event::where('start_date', '<=', $request->start)->where('end_date', '>=', $request->start)->
        where('resource_id', '=', $request->lab)->count();


        if($data >= 1) {

            return response()->json(array("larger" => true));

        } else {

            if ($request->start <= $request->end) {

                Event::create([
                    'user_id' => Auth::user()->id,
                    'resource_id' => $request->lab,
                    'title' => $request->eventName,
                    'start_date' => $request->start,
                    'end_date' => $request->end,
                ]);

                return response()->json(array("larger" => false));

            } else {

                return response()->json(array("larger" => true));
            }

        }

    }

    public function view()
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

        return view('dashboard.view_schedule')->with('jsonEvents', $jsonEvents);
    }

    public function searchEvent(Request $request)
    {
        if($request->ajax()) {

            $output="";
            $query = $request->get('query');
            $events= DB::table('events')->where('title','LIKE','%'.$query."%")->get();

            if($events) {

                foreach ($events as $key => $event) {
                    $output.='<tr>'.
                        '<td class="sorting_1">'.$event->resource_id.'</td>'.
                        '<td>'.$event->title.'</td>'.
                        '<td>'.$event->start_date.'</td>'.
                        '<td>'.$event->end_date.'</td>'.
                        '<td>'.
                            '<form method="GET" action="'.route('schedule.destroy', $event->id).'">'.'<button type="submit" class="btn btn-danger btn-sm">Delete</button>'.'</form>'.
                        '</tr>';
                }
                
            } else {
                $output = '
                       <tr>
                        <td align="center" colspan="5">No Data Found</td>
                       </tr>
                       ';
            }
            $data = array(
                'table_data'  => $output
            );

            return json_encode($data);
        }
    }

    public function destroyEvent($id){

        $event = Event::find($id);

        $event->delete();

        return back();

    }
}
