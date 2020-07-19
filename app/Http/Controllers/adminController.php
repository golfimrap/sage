<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\DBadvisor;
use App\DBposter;
use App\DBcaption;
use App\DBgallery;
use App\DBnews;
use Validator;
use redirect;
use File;


class adminController extends Controller
{
	public function GetData()
	{
		$data_query_advisor = DBadvisor::all();

		$data_query_poster 	= DBposter::all();

		$data_query_caption = DBcaption::all();

		$data_query_gallery = DBgallery::all();

		return view('backend.admin',
					[
						'data_advisor' 	=> 	$data_query_advisor,
						'data_poster'	=>	$data_query_poster,
						'data_caption'	=>	$data_query_caption,
						'data_gallery'	=>	$data_query_gallery
					]
				);
	}



    public function InsertData (Request $req)
    {
    	$rules = [
    		'prefix'		=>	'required',
	        'name' 			=>	'required',
	        'surname'		=>	'required',
	        'position'		=>	'required',
	        'advisor_pic'	=>	'required'
      	];
		$validator = Validator::make($req->all(), $rules);

	    if ($validator->fails()) {
	        return response()->json([
	            'status'	=>	'error',
	            'message'	=>	'error_require_data'
	        ]);
	    }

	   	// dd($data);

	    if($req->hasFile('advisor_pic')){
        	// cache the file
        	$file_advisor_pic = $req->file('advisor_pic');
        	// generate a new filename. getClientOriginalExtension() for the file extension
        	$filename_advisor_pic = time(). '.' . $file_advisor_pic->getClientOriginalExtension();
       		// save to storage/app/photos as the new $filename
       		// dd($filename_person_pic);
        	$upload = $file_advisor_pic->storeAs('public/img/consult', $filename_advisor_pic);
        	// dd($upload);
      	}else{
        	$filename_advisor_pic = NULL;
      	}

      	$data = array
	    		(
	    			'prefix'		=>	$req->post('prefix'),
	    			'name'			=>	$req->post('name'),
	    			'surname'		=>	$req->post('surname'),
	    			'position'		=>	$req->post('position'),
	    			'advisor_pic'	=>	$filename_advisor_pic
	    		);


	    DBadvisor::insert($data);
	    return redirect()->route('admin');
    }

    public function InsertPoster (Request $req)
    {
    	// dd($req);
    	$rules = [
    		'topic'			=>	'required',
	        'poster_date' 	=>	'required',
	        'poster_pic'	=>	'required|image|mimes:jpeg,png,jpg,gif,svg'
      	];

      	$validator = Validator::make($req->all(), $rules);

      	if ($validator->fails()) {
	        return response()->json([
	            'status'	=>	'error',
	            'message'	=>	'error_require_data'
	        ]);
	    }


	    if($req->hasFile('poster_pic')){
        	// cache the file
        	$file_poster_pic = $req->file('poster_pic');
        	if (!$file_poster_pic->isValid()){ // now check if it's valid
	            return back()->with('error', $file->getErrorMessage());
	        }
        	// generate a new filename. getClientOriginalExtension() for the file extension
        	$filename_poster_pic = time(). '.' . $file_poster_pic->getClientOriginalExtension();
       		// save to storage/app/photos as the new $filename
       		// dd($filename_person_pic);
        	$upload = $file_poster_pic->storeAs('public/img/poster', $filename_poster_pic);
        	// dd($filename_poster_pic);
      	}else{
        	$filename_poster_pic = NULL;
        	// dd($filename_poster_pic);
      	}

      	$data = array
	    		(
	    			'topic'			=>	$req->post('topic'),
	    			'poster_date'	=>	$req->post('poster_date'),
	    			'poster_pic'	=>	$filename_poster_pic
	    		);
	    // dd($data);
	    DBposter::insert($data);
	    return redirect()->route('admin');
    }

    public function InsertCaption(Request $req)
    {
    	$rules = [
    		'topic_caption'	=>	'required',
	        'para1' 		=>	'required',
	        'para2'			=>	'required',
	        'caption_pic'	=>	'required|image|mimes:jpeg,png,jpg,gif,svg'
      	];

      	$validator = Validator::make($req->all(), $rules);

      	if ($validator->fails()) {
	        return response()->json([
	            'status'	=>	'error',
	            'message'	=>	'error_require_data'
	        ]);
	    }


	    if($req->hasFile('caption_pic')){
        	// cache the file
        	$file_caption_pic = $req->file('caption_pic');
        	if (!$file_caption_pic->isValid()){ // now check if it's valid
	            return back()->with('error', $file->getErrorMessage());
	        }
        	// generate a new filename. getClientOriginalExtension() for the file extension
        	$filename_caption_pic = time(). '.' . $file_caption_pic->getClientOriginalExtension();
       		// save to storage/app/photos as the new $filename
       		// dd($filename_person_pic);
        	$upload = $file_caption_pic->storeAs('public/img/caption', $filename_caption_pic);
        	// dd($filename_poster_pic);
      	}else{
        	$filename_caption_pic = NULL;
        	// dd($filename_poster_pic);
      	}

      	$data = array
	    		(
	    			'topic_caption'			=>	$req->post('topic_caption'),
	    			'para1'	=>	$req->post('para1'),
	    			'para2'	=>	$req->post('para2'),
	    			'caption_pic'	=>	$filename_caption_pic
	    		);

	    DBcaption::insert($data);

    	return redirect()->route('admin');
    }

    public function InsertGallery(Request $req)
    {
    	$rules = [
	        'gallery_pic'	=>	'required|image|mimes:jpeg,png,jpg,gif,svg|max:4048'
      	];

      	$validator = Validator::make($req->all(), $rules);

      	if ($validator->fails()) {
	        return response()->json([
	            'status'	=>	'error',
	            'message'	=>	'error_require_data'
	        ]);
	    }


	    if($req->hasFile('gallery_pic')){
        	// cache the file
        	$file_gallery_pic = $req->file('gallery_pic');
        	if (!$file_gallery_pic->isValid()){ // now check if it's valid
	            return back()->with('error', $file->getErrorMessage());
	        }
        	// generate a new filename. getClientOriginalExtension() for the file extension
        	$filename_gallery_pic = time(). '.' . $file_gallery_pic->getClientOriginalExtension();
       		// save to storage/app/photos as the new $filename
       		// dd($filename_person_pic);
        	$upload = $file_gallery_pic->storeAs('storage/img/gallery', $filename_gallery_pic);
        	// dd($filename_poster_pic);
      	}else{
        	$filename_gallery_pic = NULL;
        	// dd($filename_poster_pic);
      	}

      	$data = array
	    		(
	    			'gallery_pic'	=>	$filename_gallery_pic
	    		);

	    DBgallery::insert($data);

    	return redirect()->route('admin');
    }

    public function InsertNewsVDO(Request $req)
    {

        $rules = [
            'topic_news'    =>  'required',
            'name'          =>  'required',
            'date_news'     =>  'required',
            'url'           =>  'required',
            'type'          =>  'required'
            
        ];

        $validator = Validator::make($req->all(), $rules);

        if ($validator->fails()) {
            return response()->json([
                'status'    =>  'error',
                'message'   =>  'error_require_data'
            ]);
        }

        $data = array
                (
                    'topic_news'    =>  $req->post('topic_news'),
                    'name'          =>  $req->post('name'),
                    'date_news'     =>  $req->post('date_news'),
                    'url'           =>  $req->post('url'),
                    'type'          =>  $req->post('type')
                );

        DBnews::insert($data);

        return redirect()->route('admin');
    }

    public function InsertNewsText(Request $req)
    {
        $rules = [
            'topic_news'    =>  'required',
            'name'          =>  'required',
            'date_news'     =>  'required',
            'url'           =>  'required',
            'news_pic'      =>  'required',
            'type'          =>  'required'
            
        ];

        $validator = Validator::make($req->all(), $rules);

        if ($validator->fails()) {
            return response()->json([
                'status'    =>  'error',
                'message'   =>  'error_require_data'
            ]);
        }

        if($req->hasFile('news_pic')){
            // cache the file
            $file_news_pic = $req->file('news_pic');
            if (!$file_news_pic->isValid()){ // now check if it's valid
                return back()->with('error', $file->getErrorMessage());
            }
            // generate a new filename. getClientOriginalExtension() for the file extension
            $filename_news_pic = time(). '.' . $file_news_pic->getClientOriginalExtension();
            // save to storage/app/photos as the new $filename
            // dd($filename_person_pic);
            $upload = $file_news_pic->storeAs('public/img/news', $filename_news_pic);
            // dd($filename_poster_pic);
        }else{
            $filename_news_pic = NULL;
            // dd($filename_poster_pic);
        }

        $data = array
                (
                    'topic_news'    =>  $req->post('topic_news'),
                    'name'          =>  $req->post('name'),
                    'date_news'     =>  $req->post('date_news'),
                    'url'           =>  $req->post('url'),
                    'news_pic'      =>  $filename_news_pic,
                    'type'          =>  $req->post('type')
                );

        DBnews::insert($data);

        return redirect()->route('admin');
    }

    public function DestroyAdvisor($id)
    {
    	echo '<script language="javascript">';
		echo 'alert("delete success")';
		echo '</script>';

		$query_advisor_pic = DBadvisor::where('id', $id)->first(); //first เลือกแถวเดียว

		// dd($query_advisor_pic->advisor_pic);
		

		$Attched_File = '/app/public/img/consult/'.$query_advisor_pic->advisor_pic; //path อยู่ที่ storage/app/public/img/consult
      	$path_advisor = storage_path().$Attched_File;
      	$del_clean = File::delete($path_advisor);

		DBadvisor::where('id', $id)->delete();

		return redirect()->route('admin');
    }

    public function DestroyPoster($id)
    {
    	echo '<script language="javascript">';
		echo 'alert("delete success")';
		echo '</script>';

		$query_poster_pic = DBposter::where('id', $id)->first();

		$Attched_File = '/app/public/img/poster/'.$query_poster_pic->poster_pic; //path อยู่ที่ storage/app/public/img/consult
      	$path_post = storage_path().$Attched_File;
      	$del_clean = File::delete($path_post);

		DBposter::where('id', $id)->delete();

		return redirect()->route('admin');
    }

    public function DestroyCaption($id)
    {
    	echo '<script language="javascript">';
		echo 'alert("delete success")';
		echo '</script>';

		$query_caption_pic = DBcaption::where('id', $id)->first();

		$Attched_File = '/app/public/img/caption/'.$query_caption_pic->caption_pic; //path อยู่ที่ storage/app/public/img/consult
      	$path_post = storage_path().$Attched_File;
      	$del_clean = File::delete($path_post);

      	DBcaption::where('id', $id)->delete();

      	return redirect()->route('admin');
    }

    public function DestroyGallery($id)
    {
    	echo '<script language="javascript">';
		echo 'alert("delete success")';
		echo '</script>';

		$query_gallery_pic = DBgallery::where('id', $id)->first();

		$Attched_File = '/app/public/img/gallery/'.$query_gallery_pic->gallery_pic; //path อยู่ที่ storage/app/public/img/consult
      	$path_post = storage_path().$Attched_File;
      	$del_clean = File::delete($path_post);

      	DBgallery::where('id', $id)->delete();

      	return redirect()->route('admin');
    }
}