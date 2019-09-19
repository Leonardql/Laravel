<?php

namespace App\Http\Controllers;

use App\Artist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArtistApiController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {

            $artists = DB::table('artists')->where('event_id', '1')->orderby('artist_id','desc')->paginate(2);


            // -- appending items querystring to paginate urls
            return $artists;
        }catch(\Exception $e){
            return response()->json(['error' => $e->getMessage()], 400);
        }//endtry

    }

    public function find($id)
    {
        try {

            $artists = DB::table('artists')->where('event_id', $id)->orderby('artist_id','desc')->paginate(2);

            return $artists;

        }catch(\Exception $e){
            return response()->json(['error' => $e->getMessage()], 400);
        }

    }

}
