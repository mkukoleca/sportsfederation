
@extends("../layouts.master")
@section("content")


@section("title")
Rukometni savez Republike Srpske-Clubs
@endsection
 


    <br><br>
    <button><a href="/newClub">Add new Club</a></button>
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
            <th>Edit</th>
            <th>Delete</th>
            <th>Thumbnail</th>

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
            
           <td><button><a href="editClub/{{$club->id}}">Edit</button></td>
           <td><a onclick="return confirm('DA LI STE SIGURNI DA ZELITE BRISATI?')" href="deleteClub/{{$club->id}}"><button>Delete</button></a></td>
    

            <td><img src="{{ url($club->thumbnail) }}" alt="club pic"></td>
          </tr>

          @endforeach
        </tbody>
      </table>

      @isset($message)
      {{$message}}
      @endisset
   
  </div>



@endsection


