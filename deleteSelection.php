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
    <title>deleteSelection</title>
</head>
<body>
<button type="button" class="btn btn-secondary btn-lg btn-block"><a href="/selection">Back</a></button>
<div class="container">  
  <form id="contact" action="{{route('clearselection', $selection->id)}}" method="POST">
  {{csrf_field()}}
    <h3>Delete Selection</h3>
    <fieldset>
    Gender:<br><input placeholder="Gender" type="text" name ="gender" value="{{$selection->gender}}" tabindex="1"  autofocus>
    </fieldset>

    <fieldset>
    Category:<br><input placeholder="Category" type="text" name ="category" value="{{$selection->category}}" tabindex="2" >
    </fieldset>

    <fieldset>
    History:<br><input placeholder="History" type="text" name ="history" value="{{$selection->history}}" tabindex="3">
    </fieldset>
    
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Delete</button>
    </fieldset>
    <p class="copyright">Designed by <a href="https://colorlib.com" target="_blank" title="Colorlib">Colorlib</a></p>
  </form>
</div>
</body>
</html>