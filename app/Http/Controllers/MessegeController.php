<?php

namespace App\Http\Controllers;
use App\messege;

use Illuminate\Http\Request;

class MessegeController extends Controller
{
    public function addMessege(Request $request)
    {
        $addmessege = new Messege;
        $addmessege->name = $request['name'];
        $addmessege->email = $request['email'];
        $addmessege->subject = $request['subject'];
        $addmessege->number = $request['number'];
        $addmessege->message = $request['message'];
        $addmessege->save();
    }

    public function viewMessege()
    {
        $records = Messege::all();
    	return response()->json($records);
    }
}
