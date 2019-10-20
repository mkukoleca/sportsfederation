@extends("../layouts.master")
@section("content")


@section("title")
Rukometni savez Republike Srpske-Selection
@endsection


<br><br><br>
  <a href="/newSelection"><button class="myButton">Add new Selection</button></a>
<br><br><br>
<table class="blueTable">
<thead>
    <tr>   
        <th>Gender</th>
        <th>Category</th>
        <th>History</th>
        <th>Coach</th>
        <th>Club</th>
        <th>Edit</th>
        <th>Delete</th>

    </tr>
</thead>

   
<tbody>

        @foreach($selection as $select) 

        <tr>
        <td>{{$select->gender}}</td>
        <td>{{$select->category}}</td>
        <td>{{$select->history}}</td>
        <td>{{$select->staffType->name}}</td>
        <td>{{$select->club->name}}</td>

        <td><a href="editSelection/{{$select->id}}"><button class="myButton">Edit</button></a></td>
        <td><a onclick="return confirm('DA LI STE SIGURNI DA ZELITE BRISATI?')" href="deleteSelection/{{$select->id}}"><button class="myButton">Delete</button></a></td>

        </tr>

        @endforeach

    </tbody>
</table>

@endsection