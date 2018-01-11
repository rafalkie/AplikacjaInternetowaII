@extends('master')
@section('content')


{{-- <div class="card-show"> --}}
<div class="row">

    <!-- left col. -->
    <div class="col-xs-12 col-md-9 single-video-left">

        <div class="card-show">
            <div class="videos-header2 ">
                    <h2>{{ $video->title}}</h2>
            </div>
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="{{ $video->url}}" frameborder="0" allowfullscreen></iframe>
            </div>
        
            <div class="single-video-content">
                
                <div class="categories">
                @foreach($video->categories as $category)
                  <a href="/videos/category/{{$category -> id}}"> {{$category -> name}}&nbsp;  </a>     
                @endforeach
                 </div>

                <h4>Pełny opis</h4>
                <p style="font-size:18px;color:#3c3c3c;">{{ $video->description}}</p>
                <span class="upper-label">Dodał</span>
                <span class="video-author">{{ $video->user->name }}</span>
                <div class="edit-button text-right">
                    <a href="{{action('VideosController@edit',$video->id)}}" class="btn btn-primary btn-lg ">
                        Edytuj Video
                    </a>
                    <br><hr>
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
        <div class="card text-center">
            <div class="right-col-box categories-box">
                <h4>Popularne kategorie</h4>
                 <h6>(Liczba filmów na stronie)</h6>
                <ul class="list-group">
                       @foreach($Categorys as $Category)
                    
                    <li class="list-group-item ">
                      


                  <a href="/videos/category/{{$Category-> id}}"> {{$Category -> name}}&nbsp;  </a>     
              
                        <h6>({{App\Category::find($Category->id)->videos->count()}} filmy)  </h6>
                         {{--  {{$ile=($Category->id)}} --}}
                            
                           
                    </li>
                      
                            @endforeach


                </ul>
            </div>
        </div>

        <!-- pojedynczy box -->
        <div class="card">
            <div class="right-col-box">
                <h4 class="text-center">Statystyki</h4>
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
{{-- </div> --}}
@stop