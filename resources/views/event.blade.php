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

   
    <title>Events</title>
</head>
<body>
<br><br><br>
  <a href="/newEvent"><button>Add new Event</button></a>
<br><br><br>
<table class="blueTable">
<thead>
    <tr>   
        <th>Type</th>
        <th>Name</th>
        <th>Season</th>
        <th>Description</th>
        
        <th>Edit</th>
        <th>Delete</th>

    </tr>
</thead>

   
<tbody>

        @foreach($events as $event) 

        <tr>
        <td>{{$event->type}}</td>
        <td>{{$event->name}}</td>
        <td>{{$event->season}}</td>
        <td>{{$event->description}}</td>

        <td><a href="editEvent/{{$event->id}}"><button>Edit</button></a></td>
        <td><a onclick="return confirm('DA LI STE SIGURNI DA ŽELITE BRISATI?')" href="deleteEvent/{{$event->id}}"><button>Delete</button></a></td>

        </tr>

        @endforeach

    </tbody>
</table>
</table>