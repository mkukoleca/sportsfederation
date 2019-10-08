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
<button type="button" class="btn btn-secondary btn-lg btn-block"><a href="/selection">Back</a></button>
<div class="container">  
  <form id="contact" action="{{route('createSelection')}}" method="POST">
  {{csrf_field()}}
    <h3>Add new Selection</h3>
    <fieldset>
      <input placeholder="Gender" type="text" name ="gender" tabindex="1" required autofocus>
    </fieldset>

    <fieldset>
      <input placeholder="Category" type="text" name ="category" tabindex="2" required>
    </fieldset>

    <fieldset>
      <textarea placeholder="History" type="text" name ="history" tabindex="3" required></textarea>
    </fieldset>

    <fieldset>
      <input placeholder="CoachId" type="number" name="coachId" value="coachId" tabindex="4">
    </fieldset>

    <fieldset>
      <input placeholder="ClubId" type="number" name="clubId" value="clubId" tabindex="5">
    </fieldset>


    
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
    <p class="copyright">Designed by <a href="https://bit.ly/312kfAQ" target="_blank" title="thumbnail">Pekmez_GANG</a></p>
  </form>
</div>
</body>
</html>

