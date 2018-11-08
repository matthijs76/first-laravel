@extends('layout')

@section('title')
 Contact us
 @endsection

@section('content')
<div class="main">
	  <H1>Dikke Bertha koffie op kolen</H1>
    
      <div id="formulier">        
        <div>
            <form action="verwerk_formulier.php" method="POST">
                <input type="text" name="firstname" value="Uw naam"><br><br>
    
                <input type="text" name="lastname" value="Uw achternaam"><br><br>
                <input type="email" name="email" value="" placeholder="Uw email adres"><br><br>
                <textarea name="message" rows="10" cols="30">Uw vraag.</textarea>
                <br>
                <input type="submit">
            </form>
        </div>    
        </div>
    </div>

@endsection
