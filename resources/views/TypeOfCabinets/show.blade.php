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
                <td>Type</td>
                <td>Description</td>
            </tr>
            </thead>
            <tbody>

            <tr>
        <td>{{$types -> Type}}</td>
        <td>{{$types -> Description}}</td>

    </tr>
</table>
    </div>
@endsection