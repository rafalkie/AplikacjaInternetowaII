@extends('master')
@section('content')

<div class="row">
    <br><br><br>
 <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edytuj Video</div>
                <br>
            <!-- Formularz -->

           			 @include('videos.form_errors')

					{!! Form::model($video,['method'=>'PATCH','class'=>'form-horizontal',
					'action'=> ['VideosController@update', $video -> id ]]) !!}
            		


            		 @include('videos.form',['buttonText'=>'Zaktualizuj'])

					{!! Form::close()!!}
            
            </div>
        </div>
    </div>
</div>


@stop