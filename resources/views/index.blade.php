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

   
    <title>Document</title>
</head>
<body>
<br><br><br>
  <button><a href="/newClub">Add new Club</a></button>
<br><br><br>
 <table class="blueTable">
  <thead>
            <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Address</th>
            <th>Website</th>
            <th>Date of foundation</th>
            <th>Director</th>
            <th>History</th>
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
            <td>{{$club->website}}</td>
            <td>{{$club->dateOfFoundation}}</td>
            <td>{{$club->director}}</td>
            <td>{{$club->history}}</td>


           <td><button><a href="editClub/{{$club->id}}">Edit</button></td>
           <td><button><a href="deleteClub/{{$club->id}}">Delete</a></button></td>
            </tr>
           
            @endforeach
  </tbody>
</table>

@isset($message)
{{$message}}
@endisset

</body>
</html>