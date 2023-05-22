
@extends('master') 
@section('contents')
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Customer List
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Serial Number</th>
                <th scope="col">Customer Name</th>
                <th scope="col">Customer Email</th>
                <th scope="col">Customer Phone</th>
                <!-- <th scope="col">Action</th> -->
                </tr>
    </thead>
    <tbody>
            @foreach($list as $key=>$data)
                <tr>
                    <td scope="row">{{$key+1}}</td>
                    <td>{{$data->name}}</td>
                    <td>{{$data->email}}</td>
                    <td>{{$data->mobile}}</td>
                    <!-- <td>
                        <a href="{{route('admin.customerlist.delete',$data->id)}}" class="btn btn-danger">Delete</a>
                    </td> -->
                
                </tr>
                @endforeach
        @endsection