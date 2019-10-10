<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="tableClub.css">
    <title>Document</title>
</head>
<body>
<div class="container">
<div class="row">

<div clas="col-3">
</div>

<div class="col-6">
<br><br>
  <button><a href="/newStaff">Add new Staff</a></button>
<br><br><br>
 <table class="blueTable">
  <thead>
            <tr>
            <th>No.</th>
            <th>Name</th>
            <th>Lastname</th>
            <th>Description</th>
        
            </tr>
  </thead>
  <tbody>
            @foreach($staffs as $staff)
            <tr>
            <td>{{$staff->id}} </td>
            <td>{{$staff->name}}</td>
            <td>{{$staff->lastname}}</td>
            <td>{{$staff->description}}</td>


           <td><button><a href="federation/editStaff/{{$staff->id}}">Edit</a></button></td>
           <td><button><a href="federation/deleteStaff/{{$staff->id}}">Delete</a></button></td>
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