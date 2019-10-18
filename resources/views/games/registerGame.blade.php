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
<button type="button" class="btn btn-secondary btn-lg btn-block"><a href="/games/gamesList">Back</a></button>
<div class="container">  
  <form id="contact" action="{{route('register')}}" method="POST">
  {{csrf_field()}}
    <h3>Add new Game</h3>
    
    <fieldset>
      <span>Event</span>
      <select name="eventId">
        @foreach ($events as $event)
          <option value="{{$event->id}}">{{$event->type}}</option>
        @endforeach
      </select>
      
    </fieldset>
    <fieldset>
      <input placeholder="Date" type="date" name ="date" tabindex="2" required>
    </fieldset>
    <fieldset>
      <input placeholder="Place" type="text" name ="place" tabindex="3" required>
    </fieldset>
    <fieldset>
      <span>Home</span>
          <select name="home">
            @foreach ($clubs as $club)
            <option value="{{$club->id}}">{{$club->name}}</option>
            @endforeach
          </select>  
    </fieldset>
    <fieldset>
      <span>Guest</span>
            <select name="guest">
              @foreach ($clubs as $club)
              <option value="{{$club->id}}">{{$club->name}}</option>
              @endforeach
            </select>
    </fieldset>
    <fieldset>
      <span>Referee1</span>
              <select name="referee1">
                @foreach ($staffs as $staff)
                <option value="{{$staff->id}}">{{$staff->name}}</option>
                @endforeach
              </select>
    </fieldset>
    <fieldset>
      <span>Referee2</span>
                <select name="referee2">
                  @foreach ($staffs as $staff)
                  <option value="{{$staff->id}}">{{$staff->name}}</option>
                  @endforeach
                </select>
    </fieldset>
    <fieldset>
      <span>Delegate</span>
                <select name="delegate">
                  @foreach ($staffs as $staff)
                  <option value="{{$staff->id}}">{{$staff->name}}</option>
                  @endforeach
                </select>
    </fieldset> 
    <fieldset>
      <input placeholder="Round" type="number" name ="round" tabindex="9" required>
    </fieldset>
    <fieldset>
      <input placeholder="Scores Home" type="number" min="1" name ="scoresHome" tabindex="10" required>
    </fieldset>
    <fieldset>
      <input placeholder="Scores Guest" type="number" min="1" name ="scoresGuest" tabindex="11" required>
    </fieldset>
    <fieldset>
      <textarea placeholder="Note" type="text" name ="note" tabindex="12" required></textarea>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
    <p class="copyright">Designed by <a href="https://colorlib.com" target="_blank" title="Colorlib">Colorlib</a></p>
  </form>
</div>
</body>
</html>





