<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DBcaption;
use DB;

class captionController extends Controller
{
    public function GetData()
    {
    	$data_query_caption = DBcaption::orderBy('advisor_id','ASC')->orderBy('id','DESC')->get();
    	return view('fontend.caption',
    				[
    					'data_caption'	=>	$data_query_caption
    				]
    			);
    }
}
