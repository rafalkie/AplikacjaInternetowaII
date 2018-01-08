@extends('master')
@section('content')

<div class="col-xs-12 videos-header card">
    <h2>{{ $video->title}}</h2>
</div>

<div class="row">

    <!-- left col. -->
    <div class="col-xs-12 col-md-9 single-video-left">

        <div class="card">

            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="{{ $video->url}}" frameborder="0" allowfullscreen></iframe>
            </div>
        
            <div class="single-video-content">
                
                <div class="categories">
                @foreach($video->categories as $category)
                  <a href=""> {{$category -> name}}&nbsp;  </a>     
                @endforeach
                 </div>

                <h4>Pełny opis</h4>
                <p>{{ $video->discription}}</p>
                <span class="upper-label">Dodał</span>
                <span class="video-author">Strefa Kursów</span>
                <div class="edit-button">
                    <a href="{{action('VideosController@edit',$video->id)}}" class="btn btn-primary btn-lg">
                        Edytuj Video
                    </a>
                </div>
            </div>
            
        </div>
        
    </div>

    <!-- right col. -->
    <div class="col-xs-12 col-md-3 single-video-right">
        
        <!-- pojedynczy box -->
        <div class="card">
            <div class="right-col-box">
                <h4>Udostępnij</h4>
                <div class="social-icons">
                    <i class="fa fa-facebook-official"></i>
                    <i class="fa fa-twitter-square"></i>
                    <i class="fa fa-google-plus-square"></i> 
                    <i class="fa fa-youtube-square"></i>
                </div>
            </div>
        </div>

        <!-- pojedynczy box -->
        <div class="card">
            <div class="right-col-box categories-box">
                <h4>Popularne kategorie</h4>
                <ul class="list-group">
                       @foreach($Categorys as $Category)
                         
                    <li class="list-group-item">
                        <h5> {{$Category-> name}}   </h5>
                 
                    </li>
                      
                            @endforeach
                </ul>
            </div>
        </div>

        <!-- pojedynczy box -->
        <div class="card">
            <div class="right-col-box">
                <h4>Statystyki</h4>
                <ul class="list-group">
                    <li class="list-group-item">

                        <span class="badge"> 
                            
                        @foreach($lFilmows as $lFilmow)
                        {{$lFilmow-> id-5}}     
                        @endforeach
                        
                    
                        </span>Filmów
              
                        
                    </li>
                    <li class="list-group-item">
                        <span class="badge">
                            @foreach($lCategorys as $lCategory)
                            {{$lCategory-> id}}     
                            @endforeach
                        </span>Kategorii
                    </li>
                    <li class="list-group-item">
                        <span class="badge">
                            @foreach($lUsers as $lUsers)
                            {{$lUsers-> id}}     
                            @endforeach
                        </span>Użytkowników
                    </li>
                    
                </ul>                            
            </div>
        </div>

    </div>

</div>
@stop