<?php

namespace App\Http\Controllers;

use Request; // rządanie

use App\Video;
use Illuminate\Support\Facades\DB;

use App\Http\Requests\CreateVideoRequest;
use Auth;
use Session;
use App\Category;
use App\User;

class CategoryController extends Controller
{
   public function about($id){
	$videos= Video::latest()->get();
	$link= $id;
    		return view('category.category',compact('link','videos'));
    }
 public function show($id){

    	
    	$video= Video::findOrFail($id);
    	return view('videos.show',compact('video'));
    }
     

   
}
