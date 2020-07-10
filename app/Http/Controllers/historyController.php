<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DBadvisor;

class historyController extends Controller
{
    public function GetData()
    {
    	$data_query_advisor = DBadvisor::all();
    	return view('fontend.history',
    				[
    					'data_advisor'	=>	$data_query_advisor
    				]
    			);
    }
}
