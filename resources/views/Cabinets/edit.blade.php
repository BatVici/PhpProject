@extends('layout')

@section('content')
    <style>
        .uper {
            margin-top: 40px;
        }
    </style>
    <div class="card uper">
        <div class="card-header">
            Edit Cabinet
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

<form action="{{action('CabinetsController@update',$cabinet->id)}}" method="post">
    {{csrf_field()}}
    <input type="hidden" class="form-control" name="_method" value="patch"/>
    <div class="form-group">
        {{csrf_field()}}
        <label for="number">Number:</label>
        <input value="{{$cabinet['Number']}}" type="text" class="form-control" name="Number" id="number"/>
    </div>
    <div class="form-group">
        {{csrf_field()}}
        <label for="capacity">Capacity:</label>
        <input value="{{$cabinet['Capacity']}}" type="text" class="form-control" name="Capacity" id="capacity"/>
    </div>
    <div class="form-group">
        {{csrf_field()}}
        <label for="type">Type:</label>
        <input value="{{$cabinet['Type']}}" type="text" class="form-control" name="Type" id="type"/>
    </div>
    <div class="form-group">
        {{csrf_field()}}
        <label for="available">Available:</label>
        <input value="{{$cabinet['Available']}}" type="text" class="form-control" name="Available" id="available"/>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
</form>
        </div>
    </div>
@endsection