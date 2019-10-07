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
<button type="button" class="btn btn-secondary btn-lg btn-block"><a href="/index">Back</a></button>
<div class="container">  
  <form id="contact" action="{{route('updateclub', $club->id)}}" method="POST">
  {{csrf_field()}}
    <h3>Update Club</h3>
    <fieldset>
    Name:<br><input placeholder="Name"  type="text" name ="name" value="{{$club->name}}" tabindex="1"  autofocus>
    </fieldset>
    <fieldset>
    Address:<br><input placeholder="Address" type="text" name ="address" value="{{$club->address}}" tabindex="2" >
    </fieldset>
    <fieldset>
    Website:<br><input placeholder="Website (optional)" type="url" name ="website" value="{{$club->website}}" tabindex="3">
    </fieldset>
    <fieldset>
    Date of foundation:<br><input placeholder="Date of foundation" type="date" name ="dateOfFoundation" value="{{$club->dateOfFoundation}}" tabindex="4">
    </fieldset>
    <fieldset>
    Director:<br><input placeholder="Director" type="text" name ="director" value="{{$club->director}}" tabindex="5" >
    </fieldset>
    <fieldset>
    History:<br><textarea placeholder="History" type="text" name ="history" value="{{$club->history}}" tabindex="6" ></textarea>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Update</button>
    </fieldset>
    <p class="copyright">Designed by <a href="https://colorlib.com" target="_blank" title="Colorlib">Colorlib</a></p>
  </form>
</div>
</body>
</html>

