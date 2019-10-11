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
    <title>Edit Staff</title>
</head>
<body>

<div class="container">
<div class="row">

<div clas="col-3">
</div>
<button type="button" class="btn btn-secondary btn-lg btn-block"><a href="/federation/staffs">Back</a></button>

<div class="container">  
  <form id="contact" method="POST" action="/editStaff/{{ $staff->id }}">
  
  @csrf
    <h3>Edit Staff Member</h3>

    
    <fieldset>
    Name:<p><input type="text" name ="name" tabindex="1" required autofocus value="{{ $staff['name'] }}">
    </fieldset>
    <fieldset>
    Lastname:<p><input type="text" name ="lastname" tabindex="2" required value="{{ $staff['lastname'] }}">
    </fieldset>
    <fieldset>
    Description:<p><textarea type="text" name ="description" tabindex="3"required value="{{ $staff['description'] }}">{{ $staff['description'] }}</textarea>
    </fieldset>
   
    <fieldset>
      <button name="submit" type="submit" id="contact-submit">Update</button>
    </fieldset>
    <p class="copyright">Designed by Sharks</a></p>
  </form>
</div>

<div class="col-6">

</div>
<div clas="col-3">
      </div>
    </div>

  </div>
</body>
</html>

