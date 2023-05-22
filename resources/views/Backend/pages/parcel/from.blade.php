@extends('master') 
@section('contents')
<form action="{{route('parcel.stores')}}" method="post">
@csrf

<div class="form-group">
 <label for="name">type</label>
 <input  type="text" class="form-control" id="name" placeholder="type" name="type">
            
 </div>
 <div class="form-group">
 <label for="unit_price">Unit_price</label>
 <input type="number" class="form-control" id="unit_price" placeholder="Unit Price" name="unit_price">
            
 </div>
 <div class="mt-2 mb-2">
        <button type="submit" class="btn btn-primary">Submit</button>
</div>
</from>
@endsection

