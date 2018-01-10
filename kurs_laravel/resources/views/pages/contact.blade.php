@extends('master')
@section('content')




	<div class="card2">
         <div class="carousel-inner">
     <img src="{{ URL::asset('/img/banner.png')}}" alt="Los Angeles" width="100%">
  </div>
<div class="row">
    <div class="single-video-content ">
  <div class="col-xs-12 col-md-12 col-lg-12 ">
   
       
  <div class="row">
    <h2 style="text-align:center;margin-bottom:30px;">Zapraszamy do kontaktu </h2>
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Formularz Kontaktowy</div>

                <div class="panel-body">  
                <form role="form">
                     <br style="clear:both">
                   
    				<div class="form-group">
						<input type="text" class="form-control" id="name" name="name" placeholder="Imię Nazwisko" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="subject" name="subject" placeholder="Temat" required>
					</div>
                    <div class="form-group">
                    <textarea class="form-control" type="textarea" id="message" placeholder="Wiadomość" maxlength="140" rows="7"></textarea>
                                         
                    </div>
            
        <button type="submit" id="submit" name="submit" class="btn btn-primary pull-right">Zatwierdź</button>
        </form>
    </div>
</div>
</div>
   </div>
</div>
</div>
 </div>
</div>
</div>

@stop
