<?php

namespace App\Http\Controllers;


use App\Order;
use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Auth;

class OrdersApiController extends Controller
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

        $orders = Order::create([
            'user_id' => $user_id,
            'ticket_id_1' => $request->ticket_id_1,
            'ticket_id_2' => $request->ticket_id_2,
            'ticket_id_3' => $request->ticket_id_3,
            'ticket_id_1_quantity' => $request->ticket_id_1_quantity,
            'ticket_id_2_quantity' => $request->ticket_id_2_quantity,
            'ticket_id_3_quantity' => $request->ticket_id_3_quantity,
            'totalOrder'    => $request->totalOrder,
            'firstName' => $request->firstName,
            'lastName' => $request->lastName,
            'company' => $request->company,
            'address'    => $request->address,
            'apartment' => $request->apartment,
            'city' => $request->city,
            'country' => $request->country,
            'postal'    => $request->postal,
            'phoneNumber' => $request->phoneNumber,

        ]);

        return $orders;


    }
}
