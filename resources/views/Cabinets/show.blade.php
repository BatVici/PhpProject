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
                <td>Number</td>
                <td>Capacity</td>
                <td>Type</td>
                <td>Available</td>
            </tr>
            </thead>
            <tbody>

        <tr>
            <td>{{$cabinet -> Number}}</td>
            <td>{{$cabinet -> Capacity}}</td>
            <td>{{$cabinet -> Type}}</td>
            <td>{{$cabinet -> Available}}</td>
        </tr>
</table>

    </div>
@endsection