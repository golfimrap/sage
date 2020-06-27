<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class newsController extends Controller
{
    public function GetData()
    {
    	return view('fontend.news');
    }
}
