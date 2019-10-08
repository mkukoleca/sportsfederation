<table>
    <tr>   
        <th> gender </th>
        <th> category </th>
        <th> history </th>
        <th> coachId </th>
        <th> clubId </th>


    </tr>

   

    @foreach($selection as $select) 
    <tr>
        <td>{{$select->gender}}</td>
        <td>{{$select->category}}</td>
        <td>{{$select->history}}</td>
        <td>{{$select->coachId}}</td>
        <td>{{$select->clubId}}</td>
        <td><a href="deleteSelection/{{$select->id}}"><button>Delete</button></a></td>

    </tr>
    @endforeach

</table>