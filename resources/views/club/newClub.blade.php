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


<div class="container">
<div class="row">

<div clas="col-3">
</div>

<div class="col-6">
<br><br>
<button type="button" class="btn btn-secondary btn-lg btn-block"><a href="/">Back</a></button>

<div class="container">  
  <form id="contact" action="{{route('createclub')}}" method="POST">
  {{csrf_field()}}
    <h3>Add new Club</h3>
    <fieldset>
      <input placeholder="Name" type="text" name ="name" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Address" type="text" name ="address" tabindex="2" required>
    </fieldset>
    <fieldset>
      <input placeholder="Email" type="email" name ="email" tabindex="3">
    </fieldset>
    <fieldset>
      <input placeholder="Website (optional)" type="url" name ="website" tabindex="4">
    </fieldset>
    <fieldset>
      <input placeholder="Date of foundation" type="date" name ="dateOfFoundation" tabindex="5" required>
    </fieldset>
    <fieldset>
      <input placeholder="Director" type="text" name ="director" tabindex="6" required>
    </fieldset>
    <fieldset>
      <textarea placeholder="History" type="text" name ="history" tabindex="7" required></textarea>
    </fieldset>
    <fieldset>
    Thumbnail:<br><textarea placeholder="Thumbnail" type="text" name ="thumbnail" tabindex="8" ></textarea>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
    <p class="copyright">Designed by Sharks</a></p>
  </form>
</div>

</div>
<div clas="col-3">
      </div>
    </div>

  </div>
</body>
</html>

