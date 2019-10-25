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
    <link rel="stylesheet" type="text/css" href="../../navbar.css">
    <link rel="stylesheet" type="text/css" href="../../tableClub.css">
    <title>Single Game</title>
</head>

<body><br>
    <a href="/games"><button type="button" class="btn btn-secondary btn-lg">Back</button></a>
    <br><br>
    <a href="/games/registerGame"><button class="btn btn-success">Register new game</button></a>
    <br><br><br>
    <div class="table-responsive">
        <table class="blueTable">
            <thead>
                <tr>
                    <th>Event</th>
                    <th>Date/Time</th>
                    <th>Place</th>
                    <th>Home</th>
                    <th>Guest</th>
                    <th>Category</th>
                    <th>Referee1</th>
                    <th>Referee2</th>
                    <th>Delegate</th>
                    <th>Round</th>
                    <th>Scores Home</th>
                    <th>Scores Guest</th>
                    <th>Note</th>
                    <th>Registered at</th>
                    <th>Updated at</th>
                    <th>Edit</th>
                    <th>Delete</th>
                    <th>Games List</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{$game->event->type}}</td>
                    <td>{{$game->dateTime}}</td>
                    <td>{{$game->place}}</td>
                    <td>{{$game->homeClub->name}}</td>
                    <td>{{$game->guestClub->name}}</td>
                    <td>{{$game->category}}</td>
                    <td>{{$game->referee1->name}}</td>
                    <td>{{$game->referee2->name}}</td>
                    <td>{{$game->delegate->name}}</td>
                    <td>{{$game->round}}</td>
                    <td>{{$game->scoresHome}}</td>
                    <td>{{$game->scoresGuest}}</td>
                    <td>{{$game->note}}</td>
                    <td>{{$game->created_at}}</td>
                    <td>{{$game->updated_at}}</td>
                    <td><a href="/games/updateGame/{{$game->id}}"><button class="btn btn-outline-info btn-sm">Edit</button></a></td>
                    <td><a href="/deleteGame/{{$game->id}}"><button class="btn btn-outline-info btn-sm" onclick="return confirm('Are you sure you want to delete this data')">Delete</button></a></td>
                    <td><a href="/games"><button class="btn btn-outline-info btn-sm">Games List</button></a></td>
                </tr>
            </tbody>
        </table>
    </div>

    @isset($message)
    {{$message}}
    @endisset

</body>

</html>