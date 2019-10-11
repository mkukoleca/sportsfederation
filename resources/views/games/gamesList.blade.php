<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    table, th, td {
        text-align: left;
    }
</style>
</head>
<body>
    <button autofocus><a href="/games/registerGame">Register new game</a></button>
    <br/><br/><br/>
    
    <table>
    @foreach ($games as $game)
    
            <tr>
                <th>ID</th>
                <td>{{$game->id}}</td>
            </tr>
            <tr>
                <th>Event</th>
                <td>{{$game->event}}</td>
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
                <td>{{$game -> home}}</td>
            </tr>
            <tr>
                <th>Guest</th>
                <td>{{$game -> guest}}</td>
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
                <th>SkoresHome</th>
                <td>{{$game -> scoresHome}}</td>
            </tr>
            <tr>
                <th>SkoresGuest</th>
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
                <td><button><a href="/games/singleGame/{{$game->id}}">SHOW GAME</a></button></td>
                <th><button><a href="/games/updateGame/{{$game->id}}">EDIT</a></button></th>
                <td><button onclick="myFunction()"><a href="/deleteGame/{{$game->id}}">DELETE</a></button></td>
     
            </tr>
            @endforeach 
    </table>
    <script>
        function myFunction() {
            var x;
            var del = confirm("Are you sure you want you want to delete data?")
            if (del == true) {
                alert("Your Account deleted!");
            } else {
                alert("Your Account NOT deleted!");
            }
            
        }
    </script>
</body>
</html>