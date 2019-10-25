@extends("../layouts.master")
@section("content")


@section("title")
Rukometni savez Republike Srpske-Staff
@endsection

<br><br><br>
<div>
    <a href="/newStaff"><button class="btn btn-success">Add new Staff</button></a>
    <br><br><br>
    <div class="table-responsive">
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
                    <td><a href="/staff?type={{ $staff->type->id }}"> {{$staff->type->name}} </a></td>
                    <td>
                        @foreach($staff->federation as $fed)
                        {{$fed->name}}
                        @endforeach
                    </td>

                    <td>
                        @if(file_exists("$staff->thumbnail"))
                        <img width="50" height="auto" src="{{ url($staff->thumbnail) }}" alt="staff pic">
                        @endif
                    </td>

                    <td><a href="/editStaff/{{ $staff->id }}"><button  class="btn btn-outline-info btn-sm">Edit</button></a></td>
                    <td><a onclick="return confirm('DA LI STE SIGURNI DA ZELITE BRISATI?')"
                            href="deleteStaff/{{$staff->id}}"><button class="btn btn-outline-info btn-sm">Delete</button></a></td>
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