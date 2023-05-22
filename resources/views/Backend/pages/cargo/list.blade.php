@extends('master')
@section('contents')
<div class="mt-2 mb-2">
    <a href=" {{route('cargo.from')}}" class="btn btn-sm btn-info">Add Cargo </a>
</div>

<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        cargo
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Serial Number</th>
                    <th scope="col">Vehicle Number</th>
                    <th scope="col">Branch</th>
                    <th scope="col">Drivers Name</th>
                    <th scope="col">Drivers License</th>
                    <!-- <th scope="col">Vehicle Capacity</th> -->
                    <!-- <th scope="col">Status</th> -->
                    <th scope="col">Action</th>
                </tr>
            <tbody>
                @foreach($data as $cargo)
                <tr>
                    <th scope="row">{{$cargo->id}}</th>
                    <td>{{$cargo->vehicle_number}}</td>
                    <td>{{$cargo->branch->Brance_name}}</td>
                    <td>{{$cargo->drivers_name}}</td>
                    <td>{{$cargo->drivers_license}}</td>
                    <!-- <td>{{$cargo->vehicle_capacity}}</td> -->
                    <!-- <td>{{$cargo->cargo_status}}</td> -->
                    <td>
                        <a href="{{route('cargo.edit',$cargo->id)}}" class="btn btn-primary">Update</a>
                        <!-- <a href="{{route('admin.cargo.delete',$cargo->id)}}" class="btn btn-danger">Delete</a>
                <a href="{{route('admin.cargo.view',$cargo->id)}}" class="btn btn-success">View</a> -->
                    </td>

                </tr>
                @endforeach



            </tbody>

            </thead>
            <tbody>





                @endsection