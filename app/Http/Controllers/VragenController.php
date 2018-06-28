<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VragenController extends Controller
{
    public function getIndex(){
        $V1 = DB::table('questions')->where('id','1')->value('vraag');

       
    }
    
}
