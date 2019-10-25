<link rel="stylesheet" href="{{ asset('css/stil.css') }}">

@extends("../layouts.master")
@section("content")

@section("title")
Rukometni savez Republike Srpske-Players
@endsection

<br><br><br>
<a href="/registerPlayer"><button class="btn btn-success">Register new player</button></a>
<br /><br />
<div class="container p-2 ml-0">
    <div class="row">
        <form action="{{action('PlayerInfoController@index')}}" method="GET" enctype="multipart/form-data">
            <div>
                <h3> Sortiranje po :</h3> <select class="dropdown-item" name="club">

                    @foreach ( collect( $player_infos)->unique('clubId')->values()->all() as $player)

                    <option value="{{$player->clubId}}">{{$player->club->name}}</option>
                    @endforeach
                </select>
                <button type="submit" id="submit_filters" class="btn btn-primary btn-sm">Submit</button>
                <button type="reset" id="reset_filters" class="btn btn-secondary btn-sm">Reset</button>
            </div>
        </div>
</div>
        </form>
<div class="table-responsive">
    <table class="table table-bordered table-dark table-striped blueTable">
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
                <td><a href="/clubs?id={{$player->clubId}}">{{$player->club->name}}</a></td>
                <td>{{$player->selection->category}}</td>
                <td>{{$player->created_at}}</td>
                <td>{{$player->updated_at}}</td>

                <td><a href="/updatePlayer/{{$player->id}}"><button
                            class="btn btn-warning btn-sm">Edit</button></a></td>
                <td><a href="/singlePlayer/{{$player->id}}"><button
                            class="btn btn-info btn-sm">Show</button></a></td>
                <td><a onclick="return confirm('DA LI STE SIGURNI DA ZELITE BRISATI?')"
                        href="/deletePlayer/{{$player->id}}"><button
                            class="btn btn-danger btn-sm">Delete</button></a></td>
            </tr>

            @endforeach
        </tbody>
    </table>

    @isset($message)
    {{$message}}
    @endisset

</div>



@endsection