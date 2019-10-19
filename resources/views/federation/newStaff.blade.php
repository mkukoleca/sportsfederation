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
    <title>Rukometni savez Republike Srpske</title>
</head>
<body>


<div class="container">
<div class="row">

<div clas="col-3">
</div>

<div class="col-6">
<br><br>
<button type="button" class="btn btn-secondary btn-lg btn-block"><a href="/staffs">Back</a></button>

<div class="container">  
  <form id="contact" action="{{route('create')}}" method="POST" enctype="multipart/form-data">
  {{csrf_field()}}
    <h3>Add new Staff</h3>
    <fieldset>
      <input placeholder="Name" type="text" name ="name" tabindex="1" required autofocus>
    </fieldset>

    <fieldset>
      <input placeholder="Description" type="text" name ="description" tabindex="3">
    </fieldset>

    <fieldset> Staff image:
      <input type="file" name="thumbnail" tabindex="3" required>
    </fieldset>


    <fieldset>
      <span>Staff Type </span>
      <select name="staffType">
        @foreach ($staff as $s)
        <option value="{{ $s->id  }}">{{ $s->name }}</option>
        @endforeach
      </select>
    </fieldset>

    <fieldset>
      <span>Federation </span>
      <select name="fedType">
        @foreach ($feds as $fed)
        <option value="{{ $fed->id }}">{{ $fed->name }}</option>
        @endforeach
      </select>
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

