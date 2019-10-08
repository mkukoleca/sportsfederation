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

   
    <title>Selection</title>
</head>
<body>
<br><br><br>
  <button><a href="/newSelection">Add new Selection</a></button>
<br><br><br>
<table class="blueTable">
<thead>
    <tr>   
        <th>gender</th>
        <th>category</th>
        <th>history</th>
        <th>coachId</th>
        <th>clubId</th>
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
        <td>{{$select->coachId}}</td>
        <td>{{$select->clubId}}</td>

        <td><button><a href="editSelection/{{$select->id}}">Edit</a></button></td>
        <td><button><a href="deleteSelection/{{$select->id}}">Delete</a></button></td>

        </tr>

        @endforeach

    </tbody>
</table>
</table>