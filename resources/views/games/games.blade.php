@extends("../layouts.master")
@section("content")


@section("title")
Rukometni savez Republike Srpske-Games
@endsection

<br><br><br>
<a href="/games/registerGame"><button class="myButton" autofocus>Register new game</button></a>
<br /><br /><br />
    <table class="table blueTable">
        <thead>
            <tr>
                <th>Event</th>
                <th>Date</th>
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
                <th>Show Game</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($games as $game)
            <tr>
                <td>{{$game->event->type}}</td>
                <td>{{$game -> date}}</td>
                <td>{{$game -> place}}</td>
                <td>{{$game -> homeClubId}}</td>
                <td>{{$game -> guestClubId}}</td>
                <td>{{$game -> category}}</td>
                <td>{{$game -> referee1}}</td>
                <td>{{$game -> referee2}}</td>
                <td>{{$game -> delegate}}</td>
                <td>{{$game -> round}}</td>
                <td>{{$game -> scoresHome}}</td>
                <td>{{$game -> scoresGuest}}</td>
                <td>{{$game -> note}}</td>
                <td>{{$game -> created_at}}</td>
                <td>{{$game -> updated_at}}</td>
                <td><a href="/games/singleGame/{{$game->id}}"><button class="myButton">Show Game</button></a></td>
                <td><a href="/games/updateGame/{{$game->id}}"><button class="myButton">Edit</button></a></td>
                <td><a href="/deleteGame/{{$game->id}}"><button class="myButton" onclick="return confirm('Are you sure you want to delete this data')">Delete</button></a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection