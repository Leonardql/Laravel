<?php

namespace App\Http\Controllers;

use App\Guest;
use App\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestimonialApiController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {


            $testimonial = DB::table('testimonials')->join('users', 'testimonials.user_id', '=', 'users.user_id')->
            where('testimonials.event_id', '1')->orderby('testimonial_id','desc')->paginate(2);


            // -- appending items querystring to paginate urls
            return $testimonial;
        }catch(\Exception $e){
            return response()->json(['error' => $e->getMessage()], 400);
        }

    }

    public function find($id)
    {
        try {

            $testimonial = DB::table('testimonials')->join('users', 'testimonials.user_id', '=', 'users.user_id')->
            where('testimonials.event_id', $id)->orderby('testimonial_id','desc')->paginate(2);


            return $testimonial;
        }catch(\Exception $e){
            return response()->json(['error' => $e->getMessage()], 400);
        }

    }


    public function create(Request $request)
    {

        $user = auth()->user();
        $user_id = $user->user_id;

        $testimonial = Testimonial::create([
            'event_id' => $request->event_id,
            'user_id' => $user_id,
            'comment' => $request->comment,
        ]);

        return $testimonial;


    }

}
