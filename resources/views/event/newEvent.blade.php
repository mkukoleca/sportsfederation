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
    <title>New Event</title>
</head>
<body>
<a href="/event"><button type="button" class="btn btn-secondary btn-lg btn-block">Back</button></a>
<div class="container">  
  <form id="contact" action="{{route('createEvent')}}" method="POST">
  {{csrf_field()}}
    <h3>Add new Event</h3>
    <fieldset>Type: <br>
      <input  type="radio" value="League" name ="type" tabindex="1" required  > League <br>
      <input  type="radio" value="Cup" name ="type" tabindex="1" required  > Cup <br>
      <input  type="radio" value="Tournament" name ="type" tabindex="1" required  > Tournament <br>
    </fieldset>

    <fieldset>
      <input placeholder="Name" type="text" name ="name" tabindex="2" required>
    </fieldset>

    <fieldset>
      <input placeholder="Season" type="text" name ="season" tabindex="3" required>
    </fieldset>

    <fieldset>
    <textarea placeholder="Description" type="text" name ="description" tabindex="4" required></textarea>

    </fieldset> 

    


    
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
    <p class="copyright">Designed by <a href="https://bit.ly/312kfAQ" target="_blank" title="thumbnail">Pekmez_GANG</a></p>
  </form>
</div>
</body>
</html>

