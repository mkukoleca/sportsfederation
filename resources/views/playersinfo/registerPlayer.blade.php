<!DOCTYPE html>
<html lang="en">
<head>
  <title>Registration</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Register new player</h2>
  <form action="{{route('register')}}" method="POST" enctype="multipart/form-data" >
  {{csrf_field()}}
    
	<div class="form-group">
      <label for="thumbnail">Profile picture:</label>
      <input type="file" class="form-control" id="thumbnail" name="thumbnail">
    </div>
	<div class="form-group">
      <label for="name">Name:</label>
      <input type="name" class="form-control" id="name"  name="name">
    </div>
    <div class="form-group">
      <label for="surname">Surname:</label>
      <input type="surname" class="form-control" id="surname"  name="surname">
    </div>
	<div class="form-group">
      <label for="description">Description:</label>
      <input type="description" class="form-control" id="description"  name="description">
    </div>
	<div class="form-group">
      <label for="position">Position:</label>
      <input type="position" class="form-control" id="position"  name="position">
    </div>
	<div class="form-group">
      <label for="height">Height:</label>
      <input type="height" class="form-control" id="height"  name="height">
    </div>
	<div class="form-group">
      <label for="weight">Weight:</label>
      <input type="weight" class="form-control" id="weight"  name="weight">
    </div>
	<div class="form-group">
      <label for="jersey_num">Jersey number:</label>
      <input type="jersey_num" class="form-control" id="jersey_num"  name="jerseyNumber">
    </div>
	<div class="form-group">
      <label for="bob">Date of birth:</label>
      <input type="date" class="form-control" id="dob"  name="dateOfBirth">
    </div>
	<div class="form-group">
      <label for="citizenship">Citizenship:</label>
      <input type="citizenship" class="form-control" id="citizenship"  name="citizenship">
    </div>
	<div class="form-group">
      <label for="ch">Club history:</label>
      <input type="ch" class="form-control" id="ch"  name="clubHistory">
    </div>
	<div class="form-group">
      <label for="cc">Current club:</label>
      <input type="cc" class="form-control" id="cc"  name="currentClub">
    </div>
	<div class="form-group">
      <label for="sel">Selection:</label>
      <input type="sel" class="form-control" id="sel"  name="selection">
    </div>

    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  <a href="/playersInfo/players"><button class="btn btn-secondary">Back</button></a>
</div>

</body>
</html>
