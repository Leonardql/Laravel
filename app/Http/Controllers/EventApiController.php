<?php

namespace App\Http\Controllers;
use App\Event;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */



      public function find($id)
    {
        try {

            $counters = (object) array();

            $counter = Event::count();
            $counters->count = $counter;

            $events = DB::table('events')->where('event_id', $id)->paginate(1);


            return response()->json([$events, "counter"=>$counters]);
        }catch(\Exception $e){
            return response()->json(['error' => $e->getMessage()], 400);
        }

    }

}
