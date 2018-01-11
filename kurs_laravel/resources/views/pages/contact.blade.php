@extends('master')
@section('content')




	<div class="card2">
         <div class="carousel-inner">
     <img src="{{ URL::asset('/img/kontakt.png')}}" alt="Los Angeles" width="100%">
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
<br> <br> <br>
  <h2 style="text-align:center;margin-bottom:30px;">Znajdź Nas na mapie</h2>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d41008.896985760555!2d21.976103588364083!3d50.029045331251915!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x432f7dd9b86f7a01!2sUniwersytet+Rzeszowski!5e0!3m2!1spl!2spl!4v1515625465795" width="600" height="450" frameborder="0" style="border:0;padding-left:120px;" allowfullscreen></iframe>

<br> <br> <br>
</div>
   </div>
</div>
</div>
 </div>
</div>
</div>

@stop
