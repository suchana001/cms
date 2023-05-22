@extends('master') 
@section('contents')


<div class="container">
    <table class="table">
    <thead class="thead-dark">
        <tr>
        <th scope="row">Serial Number</th>
        <th>Name</th>    
        <th>Email</th>
        <th>Message</th>
        <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($contactdetails as $data)
        <tr>
            <th scope="row">{{$data->id}}</th>
            <td>{{$data->name}}</td>          
            <td>{{$data->email}}</td>
            <td>{{$data->message}}</td>
            <td>
                
                <a href="{{route('admin.contact.delete',$data->id)}}" class="btn btn-danger">Delete</a>
                
            </td>

        </tr>
        @endforeach
        
    </tbody>
    </table>
</div>
@endsection