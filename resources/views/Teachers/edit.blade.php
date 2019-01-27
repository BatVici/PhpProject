@extends('layout')

@section('content')
    <style>
        .uper {
            margin-top: 40px;
        }
    </style>
    <div class="card uper">
        <div class="card-header">
            Edit Teacher
        </div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br />
            @endif

<form action="{{action('TeachersController@update',$teacher->id)}}" method="post">
    {{csrf_field()}}
    <input type="hidden" class="form-control" name="_method" value="patch"/>
    <div class="form-group">
        {{csrf_field()}}
        <label for="name">Name:</label>
        <input value="{{$teacher['Name']}}" type="text" class="form-control" name="Name" id="name"/>
    </div>
    <div class="form-group">
        {{csrf_field()}}
        <label for="subject">Subject:</label>
        <input value="{{$teacher['Subject']}}" type="text" class="form-control" name="Subject" id="subject"/>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
</form>
        </div>
    </div>
@endsection