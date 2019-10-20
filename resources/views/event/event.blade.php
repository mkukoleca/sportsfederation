@extends("../layouts.master")
@section("content")


@section("title")
Rukometni savez Republike Srpske-Players
@endsection


<br><br><br>
  <a href="/newEvent"><button class="myButton">Add new Event</button></a>
<br><br><br>
<table class="blueTable">
<thead>
    <tr>   
        <th>Type</th>
        <th>Name</th>
        <th>Season</th>
        <th>Description</th>
        
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

            <td><a href="editEvent/{{$event->id}}"><button class="myButton">Edit</button></a></td>
            <td><a onclick="return confirm('DA LI STE SIGURNI DA ŽELITE BRISATI?')" href="deleteEvent/{{$event->id}}"><button class="myButton">Delete</button></a></td>

 </tr>

        @endforeach

    </tbody>
</table>
@endsection