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

<h1 style="text-align:center">Rukometni savez Republike Srpske </h1>

   @foreach($staffs as $staff)
    
        <h1>Name: {{ $staff->name }}</h1>
        <h4>Description: {{ $staff->description }}</h4>
        <h4>Type_id: {{ $staff->type_id }}</h4>
        <button><a href="/editStaff">Edit Staff</a></button>
        
    
    @endforeach
<br><br>
<button><a href="/newStaff">Add new Staff</a></button>
</body>
</html>