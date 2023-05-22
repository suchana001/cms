@extends('master') 
@section('contents')
<div class="mt-2 mb-2">
    <a href="{{route('parcel.from')}}" class="btn btn-sm btn-info">Parcel Type </a>
</div>

<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Parcel Type 
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Serial Number</th>
                    <th scope="col">type </th>
                    <th scope="col">unit_price</th>
                    <th scope="col">Action</th>
                </tr>
                
            </thead>
            <tbody>
            @foreach($typ as $data)
                <tr>
                    <td scope="row">{{$data->id}}</td>
                    <td>{{$data->parcel_type}}</td>
                    <td>{{$data->unit_price}} BDT.</td>
                    <td>
                        <a href="{{route('parcel.edit',$data->id)}}" class="btn btn-primary">Update</a>
                        <!-- <a href="{{route('admin.parcel.delete',$data->id)}}" class="btn btn-danger">Delete</a>
                        <a href="{{route('admin.parcel.view',$data->id)}}" class="btn btn-success">View</a> -->
                    </td>
                
                </tr>
                @endforeach
@endsection