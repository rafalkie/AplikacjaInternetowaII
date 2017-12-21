<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;

class VideosController extends Controller
{
    //pobieramy listę filmów

    public function index(){

    	$videos= Video::latest()->get();
    	return view('videos.index')->with('videos',$videos);
    }

    ///metoda która wyciąga jeden film
    public function show($id){

    	
    	$video= Video::findOrFail($id);
    	return view('videos.show')->with('video',$video);
    }
}
