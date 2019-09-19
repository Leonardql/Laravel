<?php

namespace App\Http\Controllers;

use App\invintation;
use Illuminate\Http\Request;

use App\Http\Controllers\Auth;

class invintationApiController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $user = auth()->user();
        $user_id = $user->user_id;

        $invintation = Invintation::create([
            'user_id' => $user_id,
            'guestName'    => $request->guestName,
            'guestNumber' => $request->guestNumber,
            'guestEmail' => $request->guestEmail,
            'guestMessage' => $request->guestMessage
        ]);

        return $invintation;


    }
}
