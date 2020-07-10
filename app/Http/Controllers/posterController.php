<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DBposter;
use DB;

class posterController extends Controller
{
    public function GetData()
    {
    	$data_query_poster = DBposter::orderBy('id', 'DESC')->get();
    	
		return view('fontend.poster',
					[
						'data_poster'	=>	$data_query_poster
					]
				);
    }
}
