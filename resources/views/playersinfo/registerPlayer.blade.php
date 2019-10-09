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
<button type="button" class="btn btn-secondary btn-lg btn-block"><a href="/index">Back</a></button>
<div class="container">  
  <form id="contact" action="{{route('create')}}" method="POST">
  {{csrf_field()}}
    <h3>Add new Player</h3>
    <fieldset>
      <input placeholder="Thumbnail" type="text" name ="thumbnail" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Name" type="text" name ="name" tabindex="2" required>
    </fieldset>
    <fieldset>
      <input placeholder="Surname" type="text" name ="surname" tabindex="3">
    </fieldset>
    <fieldset>
      <input placeholder="Description" type="text" name ="description" tabindex="4" required>
    </fieldset>
    <fieldset>
      <input placeholder="Position" type="text" name ="position" tabindex="5" required>
    </fieldset>
    <fieldset>
    <input placeholder="Height" type="number" name ="height" tabindex="6" required>
    </fieldset>
    <fieldset>
    <input placeholder="Weight" type="number" name ="weight" tabindex="7" required>
    </fieldset>
    <fieldset>
    <input placeholder="Jersey number" type="number" name ="jerseyNumber" tabindex="8" required>
    </fieldset>
    <fieldset>
    <input placeholder="Date of birth" type="date" name ="dateOfBirth" tabindex="9" required>
    </fieldset>
    <fieldset>
      <input placeholder="Citizenship" type="text" name ="citizenship" tabindex="10" required>
    </fieldset>
    <fieldset>
      <textarea placeholder="Club history" type="text" name ="clubHistory" tabindex="11" required></textarea>
    </fieldset>
    <fieldset>
      <input placeholder="Current club" type="text" name ="currentClub" tabindex="12" required>
    </fieldset>
    <fieldset>
      <input placeholder="Selection" type="text" name ="selection" tabindex="13" required>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
    <p class="copyright">Designed by <a href="https://colorlib.com" target="_blank" title="Colorlib">Colorlib</a></p>
  </form>
</div>
</body>
</html>