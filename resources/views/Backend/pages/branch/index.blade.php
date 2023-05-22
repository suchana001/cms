@extends('master') 
@section('contents')

<div class="mt-2 mb-2">
    <a href="{{route('branch.create')}}" class="btn btn-sm btn-info">Add New Branch </a>
</div>

<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        All Branches
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Serial Number</th>
                <th scope="col">name</th>
                <th scope="col">Phone</th>
                <th scope="col">Address</th>
                <!-- <th scope="col">Status</th> -->
                <th scope="col">Action</th>
                </tr>
                
            </thead>
            <tbody>
            @foreach($cats as $data)
                <tr>
                <th scope="row">{{$data->id}}</th>
                <td>{{$data->Brance_name}}</td>
                <td>{{$data->Branch_phone}}</td>
                <td>{{$data->Branch_address}}</td>
                <!-- <td>{{$data->Branch_status}}</td> -->
                <td>
                <a href="{{route('branch.edit',$data->id)}}" class="btn btn-primary">edit</a>
                <!-- <a href="{{route('admin.branch.delete',$data->id)}}" class="btn btn-danger">Delete</a> -->
                <!-- <a href="{{route('admin.branch.view',$data->id)}}" class="btn btn-success">View</a> -->
            </td>
                   
                </tr>
                @endforeach
                
        
            
            </tbody>
        </table>
        {{$cats->links()}}
    </div>
</div>

@endsection