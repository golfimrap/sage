<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class timelineController extends Controller
{
    public function GetData()
    {
    	return view('fontend.timeline');
    }
}
