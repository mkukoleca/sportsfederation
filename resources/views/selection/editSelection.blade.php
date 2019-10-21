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
<a href="/selection"><button type="button" class="btn btn-secondary btn-lg btn-block">Back</button></a>
<div class="container">  
  <form id="contact" action="{{route('updateselection', $selection->id)}}" method="POST">
  {{csrf_field()}}
    <h3>Update Selection</h3>
    <fieldset>
    Gender:<br>
            <input  type="radio" value="Female" name ="gender" tabindex="1"  {{ $selection->gender =='Female' ? 'checked' : '' }}> Female <br>
            <input  type="radio" value="Male" name ="gender" tabindex="1"   {{ $selection->gender =='Male' ? 'checked' : '' }} > Male
    </fieldset>
    <fieldset>
    Category:<br> <input  type="radio" value="Senior" name ="category" tabindex="2"  {{ $selection->category =='Senior' ? 'checked' : '' }}> Senior <br>
         <input  type="radio" value="U21" name ="category" tabindex="2"  {{ $selection->category =='U21' ? 'checked' : '' }}> U21 <br>
         <input  type="radio" value="U19" name ="category" tabindex="2"   {{ $selection->category =='U19' ? 'checked' : '' }}> U19 <br>
         <input  type="radio" value="U17" name ="category" tabindex="2"  {{ $selection->category =='U17' ? 'checked' : '' }}> U17 
    </fieldset>
    <fieldset>
    History:<br> <textarea placeholder="History" type="text" name ="history" value="{{$selection->history}}" tabindex="4">{{$selection->history}}</textarea>
    </fieldset>
    <fieldset>
      Coach:
      <select name="coachId">
        @foreach ($staffs as $staff)
          <option value="{{$staff->id}}" @if ($staff->id == $selection->coachId) selected @endif>{{$staff->name}}</option>
        @endforeach
      </select>
    </fieldset> 
    <fieldset>
    Club Id:<br><fieldset>
      <select name="clubId" >
      @foreach ($clubs as $club)
      <option value="{{$club->id}}" @if ($club->id == $selection->clubId) selected @endif>{{$club->name}}</option>
      @endforeach
      </select>
    </fieldset>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Update</button>
    </fieldset>
    <p class="copyright">Designed by <a href="https://bit.ly/312kfAQ" target="_blank" title="thumbnail">Pekmez_GANG</a></p>
  </form>
</div>
</body>
</html>
