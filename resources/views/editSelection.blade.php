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
<button type="button" class="btn btn-secondary btn-lg btn-block"><a href="/selection">Back</a></button>
<div class="container">  
  <form id="contact" action="{{route('updateselection', $selection->id)}}" method="POST">
  {{csrf_field()}}
    <h3>Update Selection</h3>
    <fieldset>
    Gender:<br><input placeholder="Gender"  type="text" name ="gender" value="{{$selection->gender}}" tabindex="1"  autofocus>
    </fieldset>
    <fieldset>
    Category:<br><input placeholder="Category" type="text" name ="category" value="{{$selection->category}}" tabindex="2" >
    </fieldset>
    <fieldset>
    Coach Id:<br><input placeholder="CoachId" type="number" name ="coachId" value="{{$selection->coachId}}" tabindex="3">
    </fieldset>
    <fieldset>
    History:<br><input placeholder="History" type="text" name ="history" value="{{$selection->history}}" tabindex="4" >
    </fieldset>
    <fieldset>
    Club Id:<br><input placeholder="ClubId" type="number" name ="clubId" value="{{$selection->clubId}}" tabindex="5" >
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Update</button>
    </fieldset>
    <p class="copyright">Designed by <a href="https://bit.ly/312kfAQ" target="_blank" title="thumbnail">Pekmez_GANG</a></p>
  </form>
</div>
</body>
</html>
