@extends("../layouts.master")
@section("content")


@section("title")
Rukometni savez Republike Srpske-Selection
@endsection


<br><br><br>
<a href="/newSelection"><button class="btn btn-success">Add new Selection</button></a>
<br><br><br>
<div class="container-fluid">
    <table class="table table-bordered table-dark table-striped blueTable">
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
                <td><a href="editSelection/{{$select->id}}"><button class="btn btn-warning btn-sm">Edit</button></a></td>
                <td><a onclick="return confirm('DA LI STE SIGURNI DA ZELITE BRISATI?')"
                        href="deleteSelection/{{$select->id}}"><button class="btn btn-danger btn-sm">Delete</button></a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection