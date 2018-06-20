<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Result;
use App\User;
use Auth;
use Log;

class DataController extends Controller
{
    public function voegtoe(Request $request){
        Log::debug('DataController@voegtoe', ['sliderinfo' => $request->slider, 'user' => $request->uid]);
        $result = new Result;
        $result->resultaat_nummer = $request->slider['result'];
        $result->user_id = $request->uid;
        $result->score = $request->slider['value'];
        $success = $result->save();

        $json = array(
            "result" => $result->resultaat_nummer,
            "score" => $result->score,
            "status" => ($success ? 'success' : 'error')
        );

        return response()->json($json, 201);
    }

    public function gegevens()
    {
        // $user = new User;
        $user = User::all();

        return view('welcome', compact('user'));
    }
}
