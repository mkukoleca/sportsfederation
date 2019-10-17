<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="../formaClub.css">
    <title>Document</title>
</head>
<body>
<button type="button" class="btn btn-secondary btn-lg btn-block"><a href="/playersInfo/players">Back</a></button>
<div class="container">  
  <form id="contact" action="{{route('updateplayer', $player->id)}}" method="POST">
  {{csrf_field()}}
    <h3>Update Player</h3>
    <fieldset>
    Thumbnail:<br><input placeholder="Thumbnail"  type="text" name ="thumbnail" value="{{$player->thumbnail}}" tabindex="1"  autofocus>
    </fieldset>
    <fieldset>
    Name:<br><input placeholder="Name" type="text" name ="name" value="{{$player->name}}" tabindex="2" >
    </fieldset>
    <fieldset>
    Surname:<br><input placeholder="Surname" type="text" name ="surname" value="{{$player->surname}}" tabindex="3">
    </fieldset>
    <fieldset>
    Description:<br><input placeholder="Description" type="text" name ="description" value="{{$player->description}}" tabindex="4">
    </fieldset>
    <fieldset>
    Position:<br><input placeholder="Position" type="text" name ="position" value="{{$player->position}}" tabindex="5" >
    </fieldset>
    <fieldset>
    Height:<br><input placeholder="Height" type="number" name ="height" value="{{$player->height}}" tabindex="6" >
    </fieldset>
    <fieldset>
    Weight:<br><input placeholder="Weight" type="number" name ="weight" value="{{$player->weight}}" tabindex="7" >
    </fieldset>
    <fieldset>
    Jersey number:<br><input placeholder="Jersey number" type="number" name ="jerseyNumber" value="{{$player->jerseyNumber}}" tabindex="8" >
    </fieldset>
    <fieldset>
    Date of birth:<br><input placeholder="Date of birth" type="date" name ="dateOfBirth" value="{{$player->dateOfBirth}}" tabindex="9" >
    </fieldset>
    <fieldset>
    Citizenship:<br><input placeholder="Citizenship" type="text" name ="citizenship" value="{{$player->citizenship}}" tabindex="10" >
    </fieldset>
    <fieldset>
    Club history:<br><textarea placeholder="Club history" type="text" name ="clubHistory" value="{{$player->clubHistory}}" tabindex="11" >{{$player->clubHistory}}</textarea>
    </fieldset>
    <fieldset>
    Current club:<br><input placeholder="Current club" type="text" name ="club_id" value="{{$player->club_id}}" tabindex="12" >
    </fieldset>
    <fieldset>
    Selection:<br><input placeholder="Selection" type="text" name ="selection" value="{{$player->selection}}" tabindex="13" >
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Update</button>
    </fieldset>
    <p class="copyright">Designed by <a href="https://colorlib.com" target="_blank" title="Colorlib">Colorlib</a></p>
  </form>
</div>
</body>
</html>