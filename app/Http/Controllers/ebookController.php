<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\DBtypesearch;
use App\DBdisease;
use App\DBebook;



class ebookController extends Controller
{
    public function GetData()
    {
    	$query_type_search = DBtypesearch::all();
    	$query_disease = DBdisease::all();
    	$query_ebook = DBebook::orderby('id', 'DESC')->get();  
           //dd($query_type_search);
    	return view('fontend.ebook',
    					[
    						'data_type_search'	=>	$query_type_search,
    						'data_disease'	=>	$query_disease,
    						'data_ebook'	=>	$query_ebook
    					]
    				);
    }
}
