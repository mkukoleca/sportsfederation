<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="tableClub.css">



   
    <title>Rukometni savez Republike Srpske</title>
</head>
<body>

<div class="container">

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
            <td>{{$club->thumbnail}}</td>
           <td><button><a href="editClub/{{$club->id}}">Edit</button></td>
           <td><a onclick="return confirm('DA LI STE SIGURNI DA ZELITE BRISATI?')" href="deleteClub/{{$club->id}}"><button>Delete</button></a></td>
            </tr>
           
            @endforeach
  </tbody>
</table>

@isset($message)
{{$message}}
@endisset
</div>
<div clas="col-3">
      </div>
    </div>

  </div>
</body>
</html>