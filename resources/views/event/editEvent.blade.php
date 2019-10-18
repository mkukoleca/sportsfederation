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
    <title>Edit Selection</title>
</head>
<body>
<button type="button" class="btn btn-secondary btn-lg btn-block"><a href="/event">Back</a></button>
<div class="container">  
  <form id="contact" action="{{route('updateevent', $event->id)}}" method="POST">
  {{csrf_field()}}
    <h3>Update Event</h3>
    <fieldset>
    Type:<br>
          <input  type="radio" value="League" name ="type" tabindex="1"  {{$event->type == 'League' ? 'checked' : '' }} >League <br>
          <input  type="radio" value="Cup" name ="type" tabindex="1"  {{$event->type == 'Cup' ? 'checked' : '' }}>Cup <br>
          <input  type="radio" value="Tournament" name ="type" tabindex="1" {{$event->type == 'Tournament' ? 'checked' : '' }} >Tournament <br>
    </fieldset>
    <fieldset>
    Name:<br><input placeholder="Name" type="text" name ="name" value="{{$event->name}}" tabindex="2" >
    </fieldset>
    <fieldset>
    Season:<br><input placeholder="Season" type="text" name ="season" value="{{$event->season}}" tabindex="3">
    </fieldset>
    <fieldset>
    Description:<br><input placeholder="Description" type="text" name ="description" value="{{$event->description}}" tabindex="4" >
    </fieldset>
   
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Update</button>
    </fieldset>
    <p class="copyright">Designed by <a href="https://bit.ly/312kfAQ" target="_blank" title="thumbnail">Pekmez_GANG</a></p>
  </form>
</div>
</body>
</html>
