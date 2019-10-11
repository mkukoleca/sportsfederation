<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Rukometni savez Republike Srpske</title>
</head>
<body>

   <h1 style="text-align:center">Rukometni savez Republike Srpske </h1>

   @foreach($federations as $fed)
    
        <h1>Name: {{ $fed->name }}</h1>
        <h4>History: {{ $fed->history }}</h4>
        <h4>Owner: {{ $fed->owner }}</h4>
        <h4>Description: {{ $fed->description }}</h4>
    
    @endforeach
<br>
<button><a href="/newFederation">Add new Federation</a></button>
</body>
</html>