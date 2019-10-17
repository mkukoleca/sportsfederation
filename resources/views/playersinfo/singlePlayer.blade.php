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
<button autofocus><a href="/playersInfo/registerPlayer">Register new player</a></button>
<br><br><br>
 <table class="blueTable">
  
    
            <tr>
                <th>Thumbnail</th>
            <td><img src="{{url($player->thumbnail)}}"></td>
            </tr>
            <tr>
                <th>ID</th>
                <td>{{$player -> id}}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{$player -> name}}</td>
            </tr>
            <tr>
                <th>Surname</th>
                <td>{{$player -> surname}}</td>
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
                <td>{{$player -> height}}</td>
            </tr>
            <tr>
                <th>Weight</th>
                <td>{{$player -> weight}}</td>
            </tr>
            <tr>
                <th>Jersey number</th>
                <td>{{$player -> jerseyNumber}}</td>
            </tr>
            <tr>
                <th>Date of birth</th>
                <td>{{$player -> dateOfBirth}}</td>
            </tr>
            <tr>
                <th>Citizenship</th>
                <td>{{$player -> citizenship}}</td>
            </tr>
            <tr>
                <th>Club history</th>
                <td>{{$player -> clubHistory}}</td>
            </tr>
            <tr>
                <th>Current club</th>
                <td>{{$player -> club_id}}</td>
            </tr>
            <tr>
                <th>Selection</th>
                <td>{{$player -> selection}}</td>
            </tr>
            
            <tr>
                <td><button><a href="/playersInfo/updatePlayer/{{$player->id}}">EDIT</a></button></td>
                <td><button onclick="return confirm('Are you sure you want to delete this data')"><a href="/deletePlayer/{{$player->id}}">DELETE</a></button></td>
                <td><button><a href="/playersInfo/players">Lista igrača</a></button></td>
            </tr>
           
</table>

@isset($message)
{{$message}}
@endisset

</body>
</html>