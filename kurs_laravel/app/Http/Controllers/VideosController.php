<?php

namespace App\Http\Controllers;
use Request; // rządanie

use App\Video;
use App\Http\Requests\CreateVideoRequest;

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

    ///wyswietla formularz dodawania filmu

    public function create(){
    	return view('videos/create');
    }

    ////metoda zapisujaca film do bazy

    public function store(CreateVideoRequest $request){

		Video::create($request->all());


		return redirect('videos');//przekierowanie

    
    }
}
