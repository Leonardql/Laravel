<?php

namespace App\Http\Controllers;

use App\Guest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GuestApiController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {


            $guests = DB::table('guests')->where('event_id', '1')->orderby('guest_id','desc')->paginate(4);
            return $guests;

        }catch(\Exception $e){
            return response()->json(['error' => $e->getMessage()], 400);
        }

    }

    public function find($id)
    {
        try {
            $guests = DB::table('guests')->where('event_id', $id)->orderby('guest_id','desc')->paginate(4);

            return $guests;
        }catch(\Exception $e){
            return response()->json(['error' => $e->getMessage()], 400);
        }

    }



}
