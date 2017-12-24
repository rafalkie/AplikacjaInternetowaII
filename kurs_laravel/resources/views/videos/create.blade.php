@extends('master')
@section('content')
@section('title', 'Filmy-dodaj')

<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="card">
            <div class="panel-body">
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