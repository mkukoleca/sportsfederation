<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="../../formaClub.css">
    <title>Update Game</title>
</head>

<body>
<div class="container">
  <div class="row">
    <div clas="col-3"></div>
    <div class="col-6">
        <br><br>
      <a href="/games"><button type="button" class="btn btn-secondary btn-lg btn-block">Back</button></a>
      
      <form id="contact" action="{{route('updategame', $game->id)}}" method="POST">
        {{csrf_field()}}
          <h3>Update Game</h3>
          <fieldset>
            <span>Event</span>
            <select name="eventId">
              @foreach ($events as $event)
                <option value="{{$event->id}}">{{$event->type}}</option>
              @endforeach
            </select> 
          </fieldset>
          <fieldset>
          Date:<br><input placeholder=" Date/Time" type="dateTime" name =" dateTime" value="{{$game-> dateTime}}" tabindex="2" >
          </fieldset>
          <fieldset>
          Place:<br><input placeholder="Place" type="text" name ="place" value="{{$game->place}}" tabindex="3">
          </fieldset>
          <fieldset>
            <span>Home</span>
                <select name="homeClubId">
                  @foreach ($clubs as $club)
                  <option value="{{$club->id}}">{{$club->name}}</option>
                  @endforeach
                </select>  
          </fieldset>
          <fieldset>
            <span>Guest</span>
                  <select name="guestClubId">
                    @foreach ($clubs as $club)
                    <option value="{{$club->id}}">{{$club->name}}</option>
                    @endforeach
                  </select>
          </fieldset>
          <fieldset>
          <span>Category</span>
          <select name="category">
            <option value="senior">Senior</option>
            <option value="U21">U21</option>
            <option value="U19">U19</option>
            <option value="U17">U17</option>
          </select> 
          </fieldset>
          <fieldset>
            <span>Referee1</span>
                    <select name="referee1Id">
                      @foreach ($referee as $staff)
                      <option value="{{$staff->id}}">{{$staff->name}}</option>
                      @endforeach
                    </select>
          </fieldset>
          <fieldset>
            <span>Referee2</span>
                    <select name="referee2Id">
                      @foreach ($referee as $staff)
                      <option value="{{$staff->id}}">{{$staff->name}}</option>
                      @endforeach
                    </select>
          </fieldset>
          <fieldset>
            <span>Delegate</span>
                    <select name="delegateId">
                      @foreach ($delegate as $staff)
                      <option value="{{$staff->id}}">{{$staff->name}}</option>
                      @endforeach
                    </select>
          </fieldset> 
          <fieldset>
          Round:<br><input placeholder=" Round" type="number" min="1" name =" round" value="{{$game-> round}}" tabindex="9" >
          </fieldset>
          <fieldset>
          Scores Home:<br><input placeholder="ScoresHome" type="number" min="1" name ="scoresHome" value="" tabindex="10" >
          </fieldset>
          <fieldset>
          Scores Guest:<br><input placeholder="ScoresGuest" type="number" name ="scoresGuest" value="" tabindex="11" >
          </fieldset>
          <fieldset>
          Note:<br><textarea placeholder="Note" type="text" name ="note" min="1" value="{{$game->note}}" tabindex="12" ></textarea>
          </fieldset>
          <fieldset>
            <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Update</button>
          </fieldset>
          <p class="copyright">Designed by <a href="https://colorlib.com" target="_blank" title="Colorlib">Colorlib</a></p>
      </form>
    </div>
    <div clas="col-3"></div>
  </div>
</div>

</body>

</html>