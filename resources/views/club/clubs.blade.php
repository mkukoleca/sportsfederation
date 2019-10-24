@extends("../layouts.master")
@section("content")


@section("title")
Rukometni savez Republike Srpske-Clubs
@endsection


<<<<<<< HEAD
    <br><br>
    <button><a href="/newClub">Add new Club</a></button>
    <br><br><br>
    @include("filters.clubs-filter")
    <div class="table-responsive">
      <table class="table blueTable">
        <thead>
          <tr>
            <th>No.</th>
            <th>Name</th>
            <th>Address</th>
            <th>E-mail</th>
            <th>Website</th>
            <th>Date of foundation</th>
            <th>Director</th>
            <th>History</th>
            <th>Selections #</th>
            <th>Edit</th>
            <th>Delete</th>
            <th>Thumbnail</th>
=======
>>>>>>> 0466fdc640e67adb36cbbf1df182e185e67e6292

<br><br>
<a href="/newClub"><button class="myButton">Add new Club</button></a>
<br><br><br>
<div class="table-responsive">
    <table class="table blueTable">
        <thead>
            <tr>
                <th>No.</th>
                <th>Name</th>
                <th>Address</th>
                <th>E-mail</th>
                <th>Website</th>
                <th>Date of foundation</th>
                <th>Director</th>
                <th>History</th>
                <th>Selections #</th>
                <th>Thumbnail</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>

        <tbody>
            @foreach($clubs as $club)
            <tr>
                <td>{{$club->id}} </td>
                <td>{{$club->name}}</td>
                <td>{{$club->address}}</td>
                <td>{{$club->email}}</td>
                <td>{{$club->website}}</td>
                <td>{{$club->dateOfFoundation}}</td>
                <td>{{$club->director}}</td>
                <td>{{$club->history}}</td>

                <td><a href="/selection?clubId={{$club->id}}">Selection ({{count($club->selections)}})</a></td>
                <td>
                    @if(file_exists("$club->thumbnail"))
                    <img width="50" height="auto" src="{{ url($club->thumbnail) }}" alt="club pic">
                    @endif
                </td>
                <td><a href="editClub/{{$club->id}}"><button class="myButton">Edit</button></a></td>
                <td><a onclick="return confirm('DA LI STE SIGURNI DA ZELITE BRISATI?')"
                        href="deleteClub/{{$club->id}}"><button class="myButton">Delete</button></a></td>
            </tr>

            @endforeach
        </tbody>
    </table>

    @isset($message)
    {{$message}}
    @endisset

</div>



@endsection