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
<button type="button" class="btn btn-secondary btn-lg btn-block"><a href="/games/gamesList">Back</a></button>
<div class="container">  
  <form id="contact" action="{{route('updategame', $game->id)}}" method="POST">
  {{csrf_field()}}
    <h3>Update Game</h3>
    <fieldset>
    Event:<br><input placeholder="Event"  type="text" name ="event" value="{{$game->event}}" tabindex="1"  autofocus>
    </fieldset>
    <fieldset>
    Date:<br><input placeholder=" Date" type="date" name =" date" value="{{$game-> date}}" tabindex="2" >
    </fieldset>
    <fieldset>
    Place:<br><input placeholder="Place" type="text" name ="place" value="{{$game->place}}" tabindex="3">
    </fieldset>
    <fieldset>
    Home:<br><input placeholder="Home" type="text" name ="home" value="{{$game->home}}" tabindex="4">
    </fieldset>
    <fieldset>
    Guest:<br><input placeholder="Guest" type="text" name ="guest" value="{{$game->guest}}" tabindex="5" >
    </fieldset>
    <fieldset>
    Referee1:<br><input placeholder="Referee1" type="text" name ="referee1" value="{{$game->referee1}}" tabindex="6" >
    </fieldset>
    <fieldset>
    Referee2:<br><input placeholder="Referee2" type="text" name ="referee2" value="{{$game->referee2}}" tabindex="7" >
    </fieldset>
    <fieldset>
    Delegate:<br><input placeholder="Delegate" type="text" name =" delegate" value="{{$game-> delegate}}" tabindex="8" >
    </fieldset>
    <fieldset>
    Round:<br><input placeholder=" Round" type="number" name =" round" value="{{$game-> round}}" tabindex="9" >
    </fieldset>
    <fieldset>
    ScoresHome:<br><input placeholder="ScoresHome" type="number" name ="scoresHome" value="{{$game->scoresHome}}" tabindex="10" >
    </fieldset>
    <fieldset>
    ScoresGuest:<br><textarea placeholder="ScoresGuest" type="number" name ="scoresGuest" value="{{$game->scoresGuest}}" tabindex="11" ></textarea>
    </fieldset>
    <fieldset>
    Note:<br><input placeholder="Note" type="text" name ="note" value="{{$game->note}}" tabindex="12" >
    </fieldset>
    <fieldset>
    Selection:<br><input placeholder="Selection" type="text" name ="selection" value="{{$game->selection}}" tabindex="13" >
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Update</button>
    </fieldset>
    <p class="copyright">Designed by <a href="https://colorlib.com" target="_blank" title="Colorlib">Colorlib</a></p>
  </form>
</div>
</body>
</html>