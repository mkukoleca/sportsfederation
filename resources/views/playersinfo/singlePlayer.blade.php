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
    <link rel="stylesheet" type="text/css" href="../navbar.css">
    <link rel="stylesheet" type="text/css" href="../tableClub.css">
    <link rel="stylesheet" href="{{ asset('css/stil.css') }}">

    <title>Single Player</title>
</head>

<body><br>
    <a href="/players"><button type="button" class="btn btn-secondary btn-lg btn-block">Back</button></a>
    <br><br>
    <a href="/registerPlayer"><button class="myButton" autofocus>Register new player</button></a>
    <br><br><br>
    <div class="table-responsive">
        <table class="blueTable">
            <thead>
                <tr>
                    <th>Profile image</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Position</th>
                    <th>Height</th>
                    <th>Weight</th>
                    <th>Jersey number</th>
                    <th>Date of birth</th>
                    <th>Citizenship</th>
                    <th>History</th>
                    <th>Current club</th>
                    <th>Selection</th>
                    <th>Edit</th>
                    <th>Players list</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><img img class="thumbnail zoom" src="{{url($player->thumbnail)}}" width="50" height="60"
                            alt="profile img"></td>
                    <td>{{$player -> name}}</td>
                    <td>{{$player -> description}}</td>
                    <td>{{$player -> position}}</td>
                    <td>{{$player -> height}} cm</td>
                    <td>{{$player -> weight}} kg</td>
                    <td>&nbsp;&nbsp;{{$player -> jerseyNumber}}</td>
                    <td>{{$player -> dateOfBirth}}</td>
                    <td>{{$player -> citizenship}}</td>
                    <td>{{$player -> playerHistory}}</td>
                    <td>{{$player->club->name}}</td>
                    <td>{{$player->selection->category}}</td>
                    <td><a href="/updatePlayer/{{$player->id}}"><button class="myButton">Edit</button></a></td>
                    <td><a href="/players"><button class="myButton">Players list</button></a></td>
                    <td><a onclick="return confirm('DA LI STE SIGURNI DA ZELITE BRISATI?')"
                            href="/deletePlayer/{{$player->id}}"><button class="myButton">Delete</button></a></td>
                </tr>
            </tbody>
        </table>
    </div>
    @isset($message)
    {{$message}}
    @endisset


</body>

</html>