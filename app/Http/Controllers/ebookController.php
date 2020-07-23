<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\DBebook;



class ebookController extends Controller
{
    public function GetData()
    {
    	$query_ebook = DBebook::orderby('id', 'DESC')->get();  
           //dd($query_type_search);
    	return view('fontend.ebook',
    					[
    						'data_ebook'	=>	$query_ebook
    					]
    				);
    }
}
