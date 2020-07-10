<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DBgallery;

class galleryController extends Controller
{
    public function GetData()
    {
		$data_query_gallery = DBgallery::orderBy('id', 'DESC')->get();

		// dd($data_query_gallery);
    	return view('fontend.gallery',
    				[
    					'data_gallery'	=>	$data_query_gallery
    				]
    			);
    }
}
