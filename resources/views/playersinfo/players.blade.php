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
    <button autofocus><a href="/playersInfo/registerPlayer">Register new player</a></button>
    <br/><br/><br/>
    
    <table>
    @foreach ($player_infos as $player)
    
    
            <tr>
                <th>Thumbnail</th>
                <td>{{$player->thumbnail}}</td>
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
                <td>{{$player -> currentClub}}</td>
            </tr>
            
            <tr>
                <th><button><a href="/playersInfo/registerPlayer{{$player->id}}">EDIT</a></button></th>
                <td><button><a href="/playersInfo/registerPlayer{{$player->id}}">DELETE</a></button></td>
            </tr>
            @endforeach 
    </table>
        
</body>
</html>