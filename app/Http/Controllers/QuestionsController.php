<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use DB;
class QuestionsController extends Controller
{
    public function questions()
    {
        $questions = Question::all();
        // $vraag1 = DB::table('questions')->where('id', '=', 1)->get();
        // return view('welcome')->with(['questions'=>$questions,'vraag1'=>$vraag1]);
        return view('welcome')->with(['questions'=>$questions]);
    }
}
