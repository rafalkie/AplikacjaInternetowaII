@extends('master')
@section('content')

<br>
    <div class="row">
        
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dodaj Video</div>
                <hr>
            <!-- Formularz -->

                    @include('videos.form_errors')
					{!! Form::open(['url'=>'videos','class'=>'form-horizontal']) !!}
            		
                    
                    @include('videos.form',['buttonText'=>'Dodaj wideo'])
            

					{!! Form::close()!!}
            
            </div>
        </div>
    </div>
</div>


@stop