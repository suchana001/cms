@extends('master')
@section('contents')
<form action="{{route('parcel.update',$parcel->id)}}" method="post">
@method('put')
@csrf

    <div class="form-group">
        <label for="name">Type</label>
        <input value="{{$parcel->parcel_type}}" type="text" class="form-control" id="name" placeholder="type" name="type">
    </div>

    <div class="form-group">
        <label for="name">Price</label>
        <input value="{{$parcel->unit_price}}" type="number" class="form-control" id="name" placeholder="type" name="unit_price">
    </div>
        
    <div class="mt-2 mb-2">
    <button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>
@endsection