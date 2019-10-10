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
                <th>Thumbnail</th>
                <td>{{$game->event}}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{$game -> date}}</td>
            </tr>
            <tr>
                <th>Surname</th>
                <td>{{$game -> place}}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{$game -> home}}</td>
            </tr>
            <tr>
                <th>Position</th>
                <td>{{$game -> guest}}</td>
            </tr>
            <tr>
                <th>Height</th>
                <td>{{$game -> referee1}}</td>
            </tr>
            <tr>
                <th>Weight</th>
                <td>{{$game -> referee2}}</td>
            </tr>
            <tr>
                <th>Jersey number</th>
                <td>{{$game -> delegate}}</td>
            </tr>
            <tr>
                <th>Date of birth</th>
                <td>{{$game -> round}}</td>
            </tr>
            <tr>
                <th>Citizenship</th>
                <td>{{$game -> scoresGuest}}</td>
            </tr>
            <tr>
                <th>Club history</th>
                <td>{{$game -> scoresHome}}</td>
            </tr>
            <tr>
                <th>Current club</th>
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
                <td><button><a href="/games/deleteGame/{{$game->id}}">DELETE</a></button></td>
            </tr>
            @endforeach 
    </table>
        
</body>
</html>