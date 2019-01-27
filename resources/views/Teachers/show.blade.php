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
            </tr>
            </thead>
            <tbody>

            <tr>
        <td>{{$teacher -> Name}}</td>
        <td>{{$teacher -> Subject}}</td>
    </tr>
</table>
    </div>
@endsection