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



class VideosController extends Controller
{

     public function __construct(){


           $this->middleware('auth',['only'=>['edit','create']]);
    }

 
    //pobieramy listę filmów

    public function index(){


    	$videos= Video::latest()->get();

    	return view('videos.index')->with('videos',$videos);
    }

    //pobieramy listę filmów po kategori

    public function indexK(){


      $videos= Video::latest()->get();

      return view('videos.index')->with('videos',$videos);
    }

    ///metoda która wyciąga jeden film
    public function show($id){
       
        ///wyciaganie liczby filmów
        // $lFilmow=DB::table('category_video')->limit(1)->latest()->get();
         $lFilmows=Video::latest()->limit(1)->get();
         $lCategorys=DB::table('categories')->limit(1) ->orderBy('id', 'desc')->get();
         $Categorys=DB::table('categories')->get();
         $CategoryLs=DB::table('category_video','categories')->count();
         $lUsers=User::latest()->limit(1)->get();
         $lGatuneks=DB::table('category_video')->where('category_id','$id')->orderBy('category_id', 'asc')->get();
         
    	
    	$video= Video::findOrFail($id);
    	return view('videos.show',compact('video','lFilmows','lCategorys','lUsers','Categorys','CategoryLs','$ile'));
    }

    ///wyswietla formularz dodawania filmu

    public function create(){
        $categories = Category::pluck('name','id');
    	return view('videos/create')->with('categories',$categories);
    }

    ////metoda zapisujaca film do bazy

    public function store(CreateVideoRequest $request){




		 $video = new Video($request->all());
        Auth::user()->videos()->save($video);

        $categoriesIds= $request->input('CategoryList');
        $video->categories()->attach( $categoriesIds);
        Session::flash('video_created','Twój film został dodany');
		return redirect('videos');//przekierowanie

    
    }

    	/////formularz edycji video
    public function edit($id)
    {

			$video = Video::findOrFail($id);
             $categories = Category::pluck('name','id');
			// return view('videos.edit')->with('video',$video)->with('categories',$categories);	
               return view('videos.edit',compact('video','categories'));   

    
    }
    	/// aktualizacja filmu
      public function update($id, CreateVideoRequest $request)
    {

			$video = Video::findOrFail($id);
			$video ->update($request->all());
            $video ->categories()->sync($request->input('CategoryList'));
			return redirect('videos');	

    
    }

 
}