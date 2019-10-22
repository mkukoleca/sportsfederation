<link rel="stylesheet" href="{{ asset('css/stil.css') }}">

@extends("../layouts.master")
@section("content")

@section("title")
Rukometni savez Republike Srpske-Players
@endsection

<br><br>
<a href="/registerPlayer"><button class="myButton" autofocus>Register new player</button></a>
<br /><br /><br />
<div class="table-responsive">
    <table class="table blueTable">
        <thead>
            <tr>
                <th>Profile image</th>
                <th>Name</th>
                <th>Description</th>
                <th>Position</th>
                <th>Height<br>Weight<br>Jersey number</th>
                <th>Date of birth</th>
                <th>Citizenship</th>
                <th>History</th>
                <th>Current club</th>
                <th>Selection</th>
                <th>Registered at</th>
                <th>Updated</th>
                <th>Edit</th>
                <th>Show</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach($player_infos as $player)
            <tr>
                <td>
                    @if(file_exists("$player->thumbnail"))
                    <img img class="thumbnail zoom" width="50" height="60" src="{{url($player->thumbnail)}}"
                        alt="{{$player -> name}}">
                    @endif
                </td>
                <td>{{$player -> name}}</td>
                <td>{{$player -> description}}</td>
                <td>{{$player -> position}}</td>
                <td>{{$player -> height}} cm<br>{{$player -> weight}} kg<br>{{$player -> jerseyNumber}}</td>
                <td>{{$player -> dateOfBirth}}</td>
                <td>{{$player -> citizenship}}</td>
                <td>{{$player -> playerHistory}}</td>
                <td>{{$player->club->name}}</td>
                <td>{{$player->selection->category}}</td>
                <td>{{$player->created_at}}</td>
                <td>{{$player->updated_at}}</td>

                <td><a href="/updatePlayer/{{$player->id}}"><button class="myButton">Edit</button></a></td>
                <td><a href="/singlePlayer/{{$player->id}}"><button class="myButton">Show</button></a></td>
                <td><a onclick="return confirm('DA LI STE SIGURNI DA ZELITE BRISATI?')"
                        href="/deletePlayer/{{$player->id}}"><button class="myButton">Delete</button></a></td>
            </tr>

            @endforeach
        </tbody>
    </table>

    @isset($message)
    {{$message}}
    @endisset

</div>



@endsection