@extends("../layouts.master")

@section("content")

@section("title")
Rukometni savez Republike Srpske-New Club
@endsection
<br>
    <a href="/players"><button type="button" class="btn_back">Back</button></a>
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


@endsection
