<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DBnews;

class newsController extends Controller
{
    public function GetData()
    {
    	$data_query_news = DBnews::orderBy('id', 'DESC')->get();
    	return view('fontend.news',
    				[
    					'data_news'	=>	$data_query_news
    				]
    			);
    }
}
