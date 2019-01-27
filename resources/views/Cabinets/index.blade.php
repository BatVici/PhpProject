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
                <td colspan="2">Action</td>
            </tr>
            </thead>
            <tbody>
@foreach($cabinets as $cabinet)
 <tr>
     <td>{{$cabinet -> Number}}</td>
     <td>{{$cabinet -> Capacity}}</td>
     <td>{{$cabinet -> Type}}</td>
     <td>{{$cabinet -> Available}}</td>

     <td>
         <form action="{{ route('cabinets.destroy', $cabinet->id)}}" method="post">
             @csrf
             @method('DELETE')
             <button class="btn btn-danger" type="submit">Delete</button>
         </form>
     </td>
     <td><a href="{{ route('cabinets.edit',$cabinet->id)}}" class="btn btn-primary" type="submit" method="POST">Edit</a></td>
     <td><a href="{{route('cabinets.show', $cabinet  -> id)}}" class="btn btn-primary"  method="POST"> Show</a></td>
 </tr>
@endforeach
            </tbody>
    </table>
    </div>
@endsection