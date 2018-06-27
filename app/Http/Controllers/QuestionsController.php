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
        $vraag1 = DB::table('questions')->where('id', '=', 1)->get();
        $vraag2 = DB::table('questions')->where('id', '=', 2)->get();
        $vraag3 = DB::table('questions')->where('id', '=', 3)->get();
        $vraag4 = DB::table('questions')->where('id', '=', 4)->get();
        $vraag5 = DB::table('questions')->where('id', '=', 5)->get();
        $vraag6 = DB::table('questions')->where('id', '=', 6)->get();
        $vraag7 = DB::table('questions')->where('id', '=', 7)->get();
        $vraag8 = DB::table('questions')->where('id', '=', 8)->get();
        $vraag9 = DB::table('questions')->where('id', '=', 9)->get();
        $vraag10 = DB::table('questions')->where('id', '=', 10)->get();
        $vraag11 = DB::table('questions')->where('id', '=', 11)->get();
        $vraag12 = DB::table('questions')->where('id', '=', 12)->get();
        $vraag13 = DB::table('questions')->where('id', '=', 13)->get();
        $vraag14 = DB::table('questions')->where('id', '=', 14)->get();
        $vraag15 = DB::table('questions')->where('id', '=', 15)->get();
        $vraag16 = DB::table('questions')->where('id', '=', 16)->get();
        $vraag17 = DB::table('questions')->where('id', '=', 17)->get();
        $vraag18 = DB::table('questions')->where('id', '=', 18)->get();
        $vraag19 = DB::table('questions')->where('id', '=', 19)->get();
        $vraag20 = DB::table('questions')->where('id', '=', 20)->get();
        $vraag21 = DB::table('questions')->where('id', '=', 21)->get();
        $vraag22 = DB::table('questions')->where('id', '=', 22)->get();
        $vraag23 = DB::table('questions')->where('id', '=', 23)->get();
        $vraag24 = DB::table('questions')->where('id', '=', 24)->get();
        $vraag25 = DB::table('questions')->where('id', '=', 25)->get();
        return view('welcome')->with(['questions'=>$questions,'vraag1'=>$vraag1,'vraag2'=>$vraag2,'vraag3'=>$vraag3,'vraag4'=>$vraag4,'vraag5'=>$vraag5,'vraag6'=>$vraag6,'vraag7'=>$vraag7,'vraag8'=>$vraag8,'vraag9'=>$vraag9,'vraag10'=>$vraag10,'vraag11'=>$vraag11,'vraag12'=>$vraag12,'vraag13'=>$vraag13,'vraag14'=>$vraag14,'vraag15'=>$vraag15,'vraag16'=>$vraag16,'vraag17'=>$vraag17,'vraag18'=>$vraag18,'vraag19'=>$vraag19,'vraag20'=>$vraag20,'vraag21'=>$vraag21,'vraag22'=>$vraag22,'vraag23'=>$vraag23,'vraag24'=>$vraag24,'vraag25'=>$vraag25]);
    }
}
