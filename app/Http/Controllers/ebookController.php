<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\DBtypesearch;
use App\DBdisease;
use App\DByears;
use App\DBisbn;
use App\DBebook;



class ebookController extends Controller
{
    public function GetData()
    {
    	$query_type_search = DBtypesearch::all();
    	$query_disease = DBdisease::all();
    	$query_years = DByears::orderby('id', 'DESC')->get();    
        $query_isbn = DBisbn::all();
    	$query_ebook = DBebook::orderby('id', 'DESC')->get();  
           //dd($query_type_search);
    	return view('fontend.ebook',
    					[
    						'data_type_search'	=>	$query_type_search,
    						'data_disease'	=>	$query_disease,
    						'data_years'	=>	$query_years,
                            'data_isbn'    =>  $query_isbn,
    						'data_ebook'	=>	$query_ebook
    					]
    				);
    }
}
