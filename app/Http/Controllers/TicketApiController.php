<?php

namespace App\Http\Controllers;

use App\Guest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TicketApiController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {


            $tickets = DB::table('tickets')->where('event_id', '1')->orderby('ticket_id','desc')->paginate(3);


            return $tickets;
        }catch(\Exception $e){
            return response()->json(['error' => $e->getMessage()], 400);
        }

    }

    public function find($id)
    {
        try {

            $tickets = DB::table('tickets')->where('event_id', $id)->orderby('ticket_id','desc')->paginate(3);

            return $tickets;
        }catch(\Exception $e){
            return response()->json(['error' => $e->getMessage()], 400);
        }

    }
}
