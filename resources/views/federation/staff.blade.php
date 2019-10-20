@extends("../layouts.master")
@section("content")


@section("title")
Rukometni savez Republike Srpske-Staff
@endsection


<br><br><br>
<div>
      <a href="/newStaff"><button class="myButton">Add new Staff</button></a>
        <br><br><br>
        <table class="blueTable">
          <thead>
            <tr>
              <th>No.</th>
              <th>Name</th>
              <th>Description</th>
              <th>Type</th>
              <th>Federation</th>
              <th>Thumbnail</th>
              <th>Edit</th>
              <th>Delete</th>
            </tr>
          </thead>
          <tbody>
            @foreach($staffs as $staff)
            <tr>
              <td>{{$staff->id}} </td>
              <td>{{$staff->name}}</td>
              <td>{{$staff->description}}</td>
              <td>{{$staff->type->name}}</td>
              <td>
                @foreach($staff->federation as $fed)
                {{$fed->name}}
                @endforeach
              </td>

              <td><img width="50" height="auto" src="{{ url($staff->thumbnail) }}" alt="staff pic"></td>

              <td><a href="/editStaff/{{ $staff->id }}"><button class="myButton">Edit</button></a></td>
              <td><a onclick="return confirm('DA LI STE SIGURNI DA ZELITE BRISATI?')" href="deleteStaff/{{$staff->id}}"><button class="myButton">Delete</button></a></td>
            </tr>

            @endforeach
          </tbody>
        </table>

        @isset($message)
        {{$message}}
        @endisset
  </div>

@endsection