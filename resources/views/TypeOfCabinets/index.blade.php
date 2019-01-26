<table>
    <tr>
        <th>Type</th>
        <th>Description</th>

    </tr>
    <form>
        @foreach($typeofcabinets as $typeofcabinet)
            <tr>
                <td>{{$typeofcabinet-> Type}}</td>
                <td>{{$typeofcabinet -> Description}}</td>

                <td>

                    <a class="btn btn-primary"  href="{{route('$typeofcabinets.show', $typeofcabinet  -> id)}}" method="POST"> SHOW</a>
                    <a class="btn btn-primary"  href="{{route('$typeofcabinets.edit', $typeofcabinet  -> id)}}" method="POST"> EDIT</a>
                </td>
            </tr>
        @endforeach
    </form>
</table>