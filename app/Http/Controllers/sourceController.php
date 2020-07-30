<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DBadvisor;
use DB;

class sourceController extends Controller
{
    public function GetData()
    {
    	$data_query_advisor = DBadvisor::all();
    	//dd($data_query_advisor);

		return view('fontend.source',
					[
						'data_advisor'	=>	$data_query_advisor
					]
				);
    }
}
