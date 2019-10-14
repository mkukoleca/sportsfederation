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

<div class="container">
<div class="row">

<div clas="col-3">
</div>

<div class="col-6">
<br><br>

<button type="button" class="btn btn-secondary btn-lg btn-block"><a href="/staffs">Back</a></button>

  <form id="contact" action="{{route('clearstaff', $staff->id)}}" method="POST">
  {{csrf_field()}}
    <h3>Delete Staff</h3>

    <fieldset>
    Name:<br><input placeholder="Name"  type="text" name ="name" value="{{$staff->name}}" tabindex="1"  autofocus>
    </fieldset>
    <fieldset>
    Lastname:<br><input placeholder="Lastname" type="text" name ="lastname" value="{{$staff->lastname}}" tabindex="2" >
    </fieldset>
    <fieldset>
    Description:<br><input placeholder="Description" type="text" name ="description" value="{{$staff->description}}" tabindex="3">
    </fieldset>
    
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Delete</button>
    </fieldset>
    <p class="copyright">Designed by Sharks</a></p>
  </form>

</div>

<div clas="col-3">
      </div>
    </div>

  </div>
</body>
</html>