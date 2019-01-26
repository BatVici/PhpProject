<table>
    <tr>
        <th>Name</th>
        <th>Subject</th>
    </tr>
    <form>
        @foreach($teachers as $teacher)
            <tr>
                <td>{{$teacher -> Name}}</td>
                <td>{{$teacher -> Subject}}</td>

                <td>

                    <a class="btn btn-primary"  href="{{route('teachers.show', $teacher  -> id)}}" method="POST"> SHOW</a>
                    <a class="btn btn-primary"  href="{{route('teachers.edit', $teacher  -> id)}}" method="POST"> EDIT</a>
                </td>
            </tr>
        @endforeach
    </form>
</table>