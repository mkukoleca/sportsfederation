<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="tableClub.css">

   
    <title>Document</title>
</head>
<body>
<br><br><br>
<button autofocus><a href="/games/registerGame">Register new game</a></button>
<br><br><br>
 <table class="blueTable">
  
    
            
            <tr>
                <th>Event</th>
                <td>{{$game->event->type}}</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>{{$game -> date}}</td>
            </tr>
            <tr>
                <th>Place</th>
                <td>{{$game -> place}}</td>
            </tr>
            <tr>
                <th>Home</th>
                <td>{{$game -> homeClubId}}</td>
            </tr>
            <tr>
                <th>Guest</th>
                <td>{{$game -> guestClubId}}</td>
            </tr>
            <tr>
                <th>Category</th>
                <td>{{$game -> category}}</td>
            </tr>
            <tr>
                <th>Referee1</th>
                <td>{{$game -> referee1}}</td>
            </tr>
            <tr>
                <th>Referee2</th>
                <td>{{$game -> referee2}}</td>
            </tr>
            <tr>
                <th>Delegate</th>
                <td>{{$game -> delegate}}</td>
            </tr>
            <tr>
                <th>Round</th>
                <td>{{$game -> round}}</td>
            </tr>
            <tr>
                <th>Scores Home</th>
                <td>{{$game -> scoresHome}}</td>
            </tr>
            <tr>
                <th>Scores Guest</th>
                <td>{{$game -> scoresGuest}}</td>
            </tr>
            <tr>
                <th>Note</th>
                <td>{{$game -> note}}</td>
            </tr>
            
            <tr>
                <th>Registered at</th>
                <td>{{$game -> created_at}}</td>
            </tr>
            <tr>
                <th>Updated at</th>
                <td>{{$game -> updated_at}}</td>
            </tr>
            
            <tr>
                <td><button><a href="/games/updateGame/{{$game->id}}">EDIT</a></button></td>
                <td><button><a href="/deletePlayer/{{$game->id}}">DELETE</a></button></td>
                <td><button><a href="/games">GAMES LIST</a></button></td>
            </tr>
           
</table>

@isset($message)
{{$message}}
@endisset

</body>
</html>