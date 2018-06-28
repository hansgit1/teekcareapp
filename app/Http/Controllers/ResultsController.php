<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Result;
use App\Question;
use DB;
use Auth;

class ResultsController extends Controller
{
    public function results()
    {
        $results = Result::all();
        $user = Auth::user();
        
        $resultsandq = DB::table('results')
        ->join('questions', function ($join) {
            $join->on('results.resultaat_nummer', '=', 'questions.id')
                ->where('questions.id', '<=', 11);  
        })
        // ->distinct()->get(['score'])
        ->get();

        $symptoom = DB::table('questions')->distinct()->get(['symptoom']);
        $score = DB::table('results')->distinct()->get(['resultaat_nummer']);
        
        $user = Auth::id();
        
        $vraag1 = DB::table('results')
            ->where('resultaat_nummer', 1)
            ->where('user_id', $user)
            ->avg('score');

        $vraag2 = DB::table('results')
            ->where('resultaat_nummer', 2)
            ->where('user_id', $user)
            ->avg('score');

        $vraag3 = DB::table('results')
            ->where('resultaat_nummer', 3)
            ->where('user_id', $user)
            ->avg('score');

        $vraag4 = DB::table('results')
            ->where('resultaat_nummer', 4)
            ->where('user_id', $user)
            ->avg('score');

        $vraag5 = DB::table('results')
            ->where('resultaat_nummer', 5)
            ->where('user_id', $user)
            ->avg('score');

        $vraag6 = DB::table('results')
            ->where('resultaat_nummer', 6)
            ->where('user_id', $user)
            ->avg('score');

        $vraag7 = DB::table('results')
            ->where('resultaat_nummer', 7)
            ->where('user_id', $user)
            ->avg('score');

        $vraag8 = DB::table('results')
            ->where('resultaat_nummer', 8)
            ->where('user_id', $user)
            ->avg('score');

        $vraag9 = DB::table('results')
            ->where('resultaat_nummer', 9)
            ->where('user_id', $user)
            ->avg('score');

        $vraag10 = DB::table('results')
            ->where('resultaat_nummer', 10)
            ->where('user_id', $user)
            ->avg('score');

        $vraag11 = DB::table('results')
            ->where('resultaat_nummer', 11)
            ->where('user_id', $user)
            ->avg('score');

        $vraag12 = DB::table('results')
            ->where('resultaat_nummer', 12)
            ->where('user_id', $user)
            ->avg('score');
        
            $vraag13 = DB::table('results')
            ->where('resultaat_nummer', 13)
            ->where('user_id', $user)
            ->avg('score');

        $vraag14 = DB::table('results')
            ->where('resultaat_nummer', 14)
            ->where('user_id', $user)
            ->avg('score');

        $vraag15 = DB::table('results')
            ->where('resultaat_nummer', 15)
            ->where('user_id', $user)
            ->avg('score');

        $vraag16 = DB::table('results')
            ->where('resultaat_nummer', 16)
            ->where('user_id', $user)
            ->avg('score');

        $vraag17 = DB::table('results')
            ->where('resultaat_nummer', 17)
            ->where('user_id', $user)
            ->avg('score');

        $vraag18 = DB::table('results')
            ->where('resultaat_nummer', 18)
            ->where('user_id', $user)
            ->avg('score');

        $vraag19 = DB::table('results')
            ->where('resultaat_nummer', 19)
            ->where('user_id', $user)
            ->avg('score');

        $vraag20 = DB::table('results')
            ->where('resultaat_nummer', 20)
            ->where('user_id', $user)
            ->avg('score');

        $vraag21 = DB::table('results')
            ->where('resultaat_nummer', 21)
            ->where('user_id', $user)
            ->avg('score');

        $vraag22 = DB::table('results')
            ->where('resultaat_nummer', 22)
            ->where('user_id', $user)
            ->avg('score');

        $vraag23 = DB::table('results')
            ->where('resultaat_nummer', 23)
            ->where('user_id', $user)
            ->avg('score');

        $vraag24 = DB::table('results')
            ->where('resultaat_nummer', 24)
            ->where('user_id', $user)
            ->avg('score');
        
        $vraag25 = DB::table('results')
            ->where('resultaat_nummer', 25)
            ->where('user_id', $user)
            ->avg('score');

        return view('welcome')->with(['results'=>$results,'symptoom'=>$symptoom,'score'=>$score,'vraag1'=>$vraag1,'vraag2'=>$vraag2,'vraag3'=>$vraag3,'vraag4'=>$vraag4,'vraag5'=>$vraag5,'vraag6'=>$vraag6,'vraag7'=>$vraag7,'vraag8'=>$vraag8,'vraag9'=>$vraag9,'vraag10'=>$vraag10,'vraag11'=>$vraag11,'vraag12'=>$vraag12,'vraag13'=>$vraag13,'vraag14'=>$vraag14,'vraag15'=>$vraag15,'vraag16'=>$vraag16,'vraag17'=>$vraag17,'vraag18'=>$vraag18,'vraag19'=>$vraag19,'vraag20'=>$vraag20,'vraag21'=>$vraag21,'vraag22'=>$vraag22,'vraag23'=>$vraag23,'vraag24'=>$vraag24,'vraag25'=>$vraag25]);
        
    }
}
