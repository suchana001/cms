@extends('master')
@section('contents')
<form action="{{route('booking.details',$booking->id)}}" method="post">
    @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Cargo Details</label>
    
    
    <select name="cargo" >
        @foreach($typ as $cargo)
                <option value="{{$cargo->id}}">{{$cargo->vehicle_number}}</option>
                @endforeach
               
            </select>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection