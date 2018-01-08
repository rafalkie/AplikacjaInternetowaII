@extends('master')
@section('content')




	<div class="container ">
    <div class="col-md-5 col-md-offset-4">
    <div class="form-area">  
        <form role="form">
        <br style="clear:both">
                    <h1 style="margin-bottom: 37px; text-align: center;">Formularz Kontaktowy</h1>
    				<div class="form-group">
						<input type="text" class="form-control" id="name" name="name" placeholder="Imię Nazwisko" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="mobile" name="mobile" placeholder="Numer Telefonu" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="subject" name="subject" placeholder="Temat" required>
					</div>
                    <div class="form-group">
                    <textarea class="form-control" type="textarea" id="message" placeholder="Wiadomość" maxlength="140" rows="7"></textarea>
                        <span class="help-block"><p id="characterLeft" class="help-block ">Limit został osiągniety</p></span>                    
                    </div>
            
        <button type="button" id="submit" name="submit" class="btn btn-primary pull-right">Zatwierdź</button>
        </form>
    </div>
</div>
</div>



@stop
