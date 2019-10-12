<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="formaClub.css">
    <title>Document</title>
</head>
<body>
<button type="button" class="btn btn-secondary btn-lg btn-block"><a href="/games/gamesList">Back</a></button>
<div class="container">  
  <form id="contact" action="{{route('register')}}" method="POST" enctype="multipart/form-data">
  {{csrf_field()}}
    <h3>Add new Game</h3>
    
    <fieldset>
      <input placeholder="Event" type="text" name ="event" tabindex="1" required>
    </fieldset>
    <fieldset>
      <input placeholder="Date" type="date" name ="date" tabindex="2" required>
    </fieldset>
    <fieldset>
      <input placeholder="Place" type="text" name ="place" tabindex="3" required>
    </fieldset>
    <fieldset>
      <input placeholder="Home" type="text" name ="home" tabindex="4" required>
    </fieldset>
    <fieldset>
    <input placeholder="Guest" type="text" name ="guest" tabindex="5" required>
    </fieldset>
    <fieldset>
    <input placeholder="Referee1" type="text" name ="referee1" tabindex="6" required>
    </fieldset>
    <fieldset>
    <input placeholder="Referee2" type="text" name ="referee2" tabindex="7" required>
    </fieldset>
    <fieldset>
    <input placeholder="Delegate" type="text" name ="delegate" tabindex="8" required>
    </fieldset>
    <fieldset>
      <input placeholder="Round" type="number" name ="round" tabindex="9" required>
    </fieldset>
    <fieldset>
      <input placeholder="Scores Home" type="number" name ="scoresHome" tabindex="10" required>
    </fieldset>
    <fieldset>
      <input placeholder="Scores Guest" type="number" name ="scoresGuest" tabindex="11" required>
    </fieldset>
    <fieldset>
      <textarea placeholder="Note" type="text" name ="note" tabindex="12" required></textarea>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
    <p class="copyright">Designed by <a href="https://colorlib.com" target="_blank" title="Colorlib">Colorlib</a></p>
  </form>
</div>
</body>
</html>





