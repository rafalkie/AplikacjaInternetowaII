
@extends('master')

@section('content')



	 
<div class="row">
	<br><br>
<div class="videos-header ">
    <h2>Filmy gatunek - 
   {{App\Category::find($link)->name}}
                  

</div>
	@foreach(App\Category::find($link)->videos as $video)

	    <!-- Single video -->
	    <div class="col-xs-12 col-md-6 col-lg-4 single-video">
	        <div class="card">
	        
	            <div class="embed-responsive embed-responsive-16by9">
	                <iframe class="embed-responsive-item" src="{{ $video->url}}" frameborder="0" allowfullscreen></iframe>
	            </div>
	            <div class="card-content">
	                <a href="{{ url('videos',$video->id) }}">
	                    <h4>{{ $video->title}}</h4>
	                </a>
	                <p>{{str_limit($video->description, 40)}}</p>
	                <span class="upper-label">Dodał</span>
	                <span class="video-author">{{ $video->user->name }}</span>
	            </div>
	            
	        </div>
	    </div>

    @endforeach

</div>
                {{--  {{App\Category::find(8)->videos}} --}}
			{{-- 	@foreach(App\Category::find(1)->videos as $video)
                  <a href=""> {{$category -> name}}&nbsp;  </a>     
                @endforeach --}}
                 
@stop