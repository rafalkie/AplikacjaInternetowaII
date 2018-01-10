@extends('master')
@section('content')


<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>



  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="{{ URL::asset('/img/1.jpg')}}" alt="Los Angeles">
    </div>

    <div class="item">
      <img src="{{ URL::asset('/img/2.jpg')}}" alt="Chicago">
    </div>

    <div class="item">
      <img src="{{ URL::asset('/img/3.jpg')}}" alt="New York">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>



<div class="videos-header ">
    <h2>Najnowsze Filmy</h2>
</div>

@if (Session::has('video_created'))
	<div class="alert alert-success card">
	{{Session::get('video_created')}}

	</div>
@endif

<div class="row">

	@foreach($videos as $video)

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
@stop