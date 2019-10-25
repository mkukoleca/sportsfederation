@extends("../layouts.masterMeni")
@section("content")


@section("title")
Rukometni savez Republike Srpske-Event
@endsection


<br><br><br>
<a href="/newEvent"><button class="btn btn-success">Add new Event</button></a>
<br><br><br>
<div class="container-fluid">
    <table class="table table-bordered table-dark table-striped blueTable">
        <thead>
            <tr>
                <th>Type</th>
                <th>Name</th>
                <th>Season</th>
                <th>Description</th>
                <th>Games</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach($events as $event)
            <tr>
                <td>{{$event->type}}</td>
                <td>{{$event->name}}</td>
                <td>{{$event->season}}</td>
                <td>{{$event->description}}</td>
                
                <td><a href="/games?eventId={{$event->id}}">Games  {{count($event->games)}}</a></td>
                <td><a href="editEvent/{{$event->id}}"><button class="btn btn-warning btn-sm">Edit</button></a></td>
                <td><a onclick="return confirm('DA LI STE SIGURNI DA ŽELITE BRISATI?')"
                        href="deleteEvent/{{$event->id}}"><button class="btn btn-danger btn-sm">Delete</button></a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection