@extends('layout')

@section('content')
    <style>
        .uper {
            margin-top: 40px;
        }
    </style>
    <div class="uper">
        @if(session()->get('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div><br />
        @endif

        <table class="table table-striped">
            <thead>
            <tr>
                <td>Name</td>
                <td>Subject</td>
                <td colspan="2">Action</td>
            </tr>
            </thead>
            <tbody>
    <form>
        @foreach($teachers as $teacher)
            <tr>
                <td>{{$teacher -> Name}}</td>
                <td>{{$teacher -> Subject}}</td>
                <td>
                <form action="{{ route('teachers.destroy', $teacher->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>
                </td>
                <td><a href="{{ route('teachers.edit',$teacher->id)}}" class="btn btn-primary" type="submit" method="POST">Edit</a></td>
                <td><a href="{{route('teachers.show', $teacher  -> id)}}" class="btn btn-primary"  method="POST"> Show</a></td>
            </tr>
        @endforeach
    </form>
            </tbody>
        </table>
    </div>
@endsection