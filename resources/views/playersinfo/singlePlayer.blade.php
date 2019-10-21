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
  <link rel="stylesheet" type="text/css" href="../navbar.css">
  <link rel="stylesheet" type="text/css" href="tableClub.css">
    <title>Single Player</title>
</head>
<body>
<div class="container">
  <div class="row">
  <div clas="col-3"></div>
  <div class="col-6">
    <br><br>
<a href="/players"><button type="button" class="btn btn-secondary btn-lg btn-block">Back</button></a>
  
 <br><br>
 <a href="/registerPlayer"><button class="myButton" autofocus>Register new player</button></a>
 <br><br><br>
 
 <table class="blueTable">
  
            <tr>
                <th>Profile image</th>
            <td><img src="{{url($player->thumbnail)}}" width="50" height="auto" alt="profile img"></td>
            </tr>
            <tr>
            <tr>
                <th>Name</th>
                <td>{{$player -> name}}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{$player -> description}}</td>
            </tr>
            <tr>
                <th>Position</th>
                <td>{{$player -> position}}</td>
            </tr>
            <tr>
                <th>Height</th>
                <td>{{$player -> height}} cm</td> 
            </tr>
            <tr>
                <th>Weight</th>
                <td>{{$player -> weight}} kg</td> 
            </tr>
            <tr>
                <th>Jersey number</th>
                <td>&nbsp;&nbsp;{{$player -> jerseyNumber}}</td>
            </tr>
            <tr>
                <th>Date of birth</th>
                <td>  {{$player -> dateOfBirth}}</td>
            </tr>
            <tr>
                <th>Citizenship</th>
                <td>{{$player -> citizenship}}</td>
            </tr>
            <tr>
                <th>History</th>
                <td>{{$player -> playerHistory}}</td>
            </tr>
            <tr>
                <th>Current club</th>
                <td>{{$player->club->name}}</td>
            </tr>
            <tr>
            
                <th>Selection</th>
                <td>{{$player->selection->category}}</td>
                
            </tr>
            
            <tr>
             <th><a href="/updatePlayer/{{$player->id}}"><button class="myButton">Edit</button></a></th>
             <td><a href="/players"><button class="myButton">Players list</button></a></td>
             <td><a onclick="return confirm('DA LI STE SIGURNI DA ZELITE BRISATI?')" href="/deletePlayer/{{$player->id}}"><button class="myButton">Delete</button></a></td>
             </tr>
           
</table>

@isset($message)
{{$message}}
@endisset
</div>
  <div clas="col-3"></div>
  </div>

</div>

</body>
</html>