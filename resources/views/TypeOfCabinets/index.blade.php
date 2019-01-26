<table>
    <tr>
        <th>Type</th>
        <th>Description</th>

    </tr>
    <form>
        @foreach($types as $type)
            <tr>
                <td>{{$type-> Type}}</td>
                <td>{{$type -> Description}}</td>

                <td>

                    <a class="btn btn-primary"  href="{{route('types.show', $type  -> id)}}" method="POST"> SHOW</a>
                    <a class="btn btn-primary"  href="{{route('types.edit', $type  -> id)}}" method="POST"> EDIT</a>
                </td>
            </tr>
        @endforeach
    </form>
</table>