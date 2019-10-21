@extends("../layouts.master")
@section("content")


@section("title")
Rukometni savez Republike Srpske-Games
@endsection
<br><br><br>
    <a href="/games/registerGame"><button class="myButton" autofocus>Register new game</button></a>
    <br/><br/><br/>
    
    <table class="blueTable">
    @foreach ($games as $game)
    
            <tr>
                <th>ID</th>
                <td>{{$game->id}}</td>
            </tr>
            <tr>
                <th>Event</th>
                <td>{{$game->eventId}}</td>
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
                <td><button><a href="/games/singleGame/{{$game->id}}">SHOW GAME</a></button></td>
                <th><button><a href="/games/updateGame/{{$game->id}}">EDIT</a></button></th>
                <td><button onclick="return confirm('Are you sure you want to delete this data')"><a href="/deleteGame/{{$game->id}}">DELETE</a></button></td>
     
            </tr>
            @endforeach 
    </table>
    
@endsection