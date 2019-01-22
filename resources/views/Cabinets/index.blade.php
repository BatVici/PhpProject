<table>
    <tr>
        <th>Number</th>
        <th>Capacity</th>
        <th>Type</th>
        <th>Available</th>
        <th>Buttons</th>
    </tr>
    <form>
@foreach($cabinets as $cabinet)
 <tr>
     <td>{{$cabinet -> Number}}</td>
     <td>{{$cabinet -> Capacity}}</td>
     <td>{{$cabinet -> Type}}</td>
     <td>{{$cabinet -> Available}}</td>
     <td>

         <a class="btn btn-primary"  href="{{route('cabinets.show', $cabinet  -> id)}}" method="POST"> SHOW</a>
         <a class="btn btn-primary"  href="{{route('cabinets.edit', $cabinet  -> id)}}" method="POST"> EDIT</a>
     </td>
 </tr>
@endforeach
    </form>
</table>