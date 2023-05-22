@extends('master')
@section('contents')
<form action="{{route('cargo.update',$cargo->id)}}" method="post">
    @method('put')
    @csrf

    <div class="form-group">
        <label for="name">Vehicle Number</label>
        <input value="{{$cargo->vehicle_number}}" required name="vehicle_number" type="text" class="form-control" id="name" placeholder="vehicle number">
    </div>

    <div class="form-group">
        <label for="">Select Branch</label>
        <select id="" class="form-control" name="branch_id" >
            @foreach(\App\Models\Branch::all() as $branch)
                <option value="{{ $branch->id}}" @if($branch->id == $cargo->branch_id) selected @endif>{{ $branch->Brance_name}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="name">Drivers Name</label>
        <input value="{{$cargo->drivers_name}}" name="drivers_name" type="text" class="form-control" id="name" placeholder="drivers name">
    </div>

    <div class="form-group">
        <label for="name">Drivers License</label>
        <input value="{{$cargo->drivers_license}}" name="drivers_license" type="text" class="form-control" id="name" placeholder="drivers license">
    </div>
    <!-- <div class="form-group">
        <label for="name">Vehicle Capacity</label>
        <input value="{{$cargo->vehicle_capacity}}" name="vehicle_capacity" type="text" class="form-control" id="name" placeholder="vehicle capacity">
    </div> -->

    <div class="form-group">
        <label for="">Select Status</label>
        <select name="cargo_status" id="" class="form-control">
            <option @if($cargo->Cargo_status=='active') selected @endif value="active">Active</option>
            <option @if($cargo->Cargo_status=='inactive') selected @endif value="inactive">Inactive</option>
        </select>
    </div>
    <div class="mt-2 mb-2">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>

@endsection