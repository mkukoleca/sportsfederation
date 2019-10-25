<link rel="stylesheet" href="{{ asset('css/stil.css') }}">
@extends("../layouts.masterMeni")
@section("content")

@section("title")
Rukometni savez Republike Srpske-Players
@endsection

<br><br><br>
<div class="container p-2 ml-0">

<a href="/registerPlayer"><button class="btn btn-success">Register new player</button></a>
<br /><br />
<div class="container-fluid">
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
                <th>Profile img</th>
                <th>Name</th>
                <th>Height<br>Weight<br>Jersey number</th>
                <th>Current club/ <br>
                Selection</th>
                <th>Change</th>
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
                <td>{{$player -> name}} ({{$player -> position}})</td>
                <td>{{$player -> height}} cm<br>{{$player -> weight}} kg<br>{{$player -> jerseyNumber}}</td>
                <td><a href="/clubs?id={{$player->clubId}}">{{$player->club->name}}/</a> <br>
                {{$player->selection->category}}</td>

                <td> 
                <div class="dropdown">
    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
      More
    </button>
                
                <div class="dropdown-menu">

                    <a class="dropdown-item" href="/singlePlayer/{{$player->id}}">Show</a>
                    <a class="dropdown-item" href="/updatePlayer/{{$player->id}}">Edit</a>
                    <a onclick="return confirm('DA LI STE SIGURNI DA ZELITE BRISATI?')" class="dropdown-item" href="/deletePlayer/{{$player->id}}">Delete</a>
                    
                    </div> 
                </td>
            </tr>


                <!-- <td><a href="/updatePlayer/{{$player->id}}"><button
                            class="btn btn-outline-info btn-sm">Edit</button></a></td>
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
</div>



@endsection