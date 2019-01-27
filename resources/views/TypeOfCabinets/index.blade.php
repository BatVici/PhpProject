@extends('layout')

@section('content')
    <a href="/types/create">Create</a>
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
                <td>Type</td>
                <td>Description</td>
                <td colspan="2">Action</td>
            </tr>
            </thead>
            <tbody>
    <form>
        @foreach($types as $type)
            <tr>
                <td>{{$type-> Type}}</td>
                <td>{{$type -> Description}}</td>

                <td>
                    <form action="{{ route('types.destroy', $type->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </td>
                <td><a href="{{ route('types.edit',$type->id)}}" class="btn btn-primary" type="submit" method="POST">Edit</a></td>
                <td><a href="{{route('types.show', $type  -> id)}}" class="btn btn-primary"  method="POST"> Show</a></td>
            </tr>
        @endforeach
    </form>
            </tbody>
        </table>
    </div>
@endsection