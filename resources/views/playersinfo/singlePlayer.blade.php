@extends("../layouts.master")
@section("content")


@section("title")
Rukometni savez Republike Srpske-Players
@endsection
<div class="container">
  <div class="row">
  
     

     <div>
  <br><br>
<button type="button" class="btn btn-secondary btn-lg btn-block"><a href="/players">Back</a></button>
<div class="container1">  
 <br><br><br>
 <a href="/registerPlayer"><button class="myButton" autofocus>Register new player</button></a>
 <br><br><br>
 <div class="table-responsive">
 <table class="blueTable">
  
    
            <tr>
                <th>Profile image</th>
            <td><img src="{{url($player->thumbnail)}}" width="50" height="auto" alt="profile img"></td>
            </tr>
            <tr>
            <tr>
                <th>Name</th>
                <td>{{$player -> name}}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{$player -> description}}</td>
            </tr>
            <tr>
                <th>Position</th>
                <td>{{$player -> position}}</td>
            </tr>
            <tr>
                <th>Height</th>
                <td>{{$player -> height}} cm</td> 
            </tr>
            <tr>
                <th>Weight</th>
                <td>{{$player -> weight}} kg</td> 
            </tr>
            <tr>
                <th>Jersey number</th>
                <td>&nbsp;&nbsp;{{$player -> jerseyNumber}}</td>
            </tr>
            <tr>
                <th>Date of birth</th>
                <td>  {{$player -> dateOfBirth}}</td>
            </tr>
            <tr>
                <th>Citizenship</th>
                <td>{{$player -> citizenship}}</td>
            </tr>
            <tr>
                <th>History</th>
                <td>{{$player -> playerHistory}}</td>
            </tr>
            <tr>
                <th>Current club</th>
                <td>{{$player->club->name}}</td>
            </tr>
            <tr>
            
                <th>Selection</th>
                <td>{{$player->selection->category}}</td>
                
            </tr>
            
            <tr>
             <th><a href="/updatePlayer/{{$player->id}}"><button class="myButton">Edit</button></a></th>
             <td><a href="/players"><button class="myButton">Players list</button></a></td>
             <td><a onclick="return confirm('DA LI STE SIGURNI DA ZELITE BRISATI?')" href="/deletePlayer/{{$player->id}}"><button class="myButton">Delete</button></a></td>
             </tr>
           
</table>

@isset($message)
{{$message}}
@endisset

@endsection