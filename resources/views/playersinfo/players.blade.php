@extends("../layouts.master")
@section("content")


@section("title")
Rukometni savez Republike Srpske-Players
@endsection


<br><br><br>
    <a href="/playersInfo/registerPlayer"><button class="myButton" autofocus>Register new player</button></a>
    <br/><br/><br/>
    
    <table>
    @foreach ($player_infos as $player)
    
            <tr>
                <th>ID</th>
                <td>{{$player->id}}</td>
            </tr>
            <tr>
                <th>Profile image</th>
                <td><img src="{{url($player->thumbnail)}}" width="50" height="auto" alt="profile img"> </td>
            </tr>
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
                <td>{{$player -> playerHistory}}</td>
            </tr>
            <tr>
                <th>Current club</th>
                <td>{{$player -> clubId}}</td>
            </tr>
            
            <tr>
                <th>Selection</th>
                <td>{{$player -> selection}}</td>
            </tr>
            <tr>
                <th>Registered at</th>
                <td>{{$player -> created_at}}</td>
            </tr>
            <tr>
                <th>Updated</th>
                <td>{{$player -> updated_at}}</td>
            </tr>
            
            <tr>
                <td><button><a href="/playersInfo/singlePlayer/{{$player->id}}">SHOW PLAYER</a></button></td>
                <th><button><a href="/playersInfo/updatePlayer/{{$player->id}}">EDIT</a></button></th>
                <td><button onclick="return confirm('Are you sure you want to delete this data')"><a href="/deletePlayer/{{$player->id}}">DELETE</a></button></td>
            </tr>
            @endforeach 
    </table>
        
@endsection