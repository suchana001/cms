@extends('master') 
@section('contents')
<h1>Booking Report</h1>

<form action="{{route('booking.report.search')}}">

<div class="row">
    <div class="col-md-4">
        <label for="">From date:</label>
        <input name="from_date" type="date" class="form-control">

    </div>
    <div class="col-md-4">
        <label for="">To date:</label>
        <input name="to_date" type="date" class="form-control">
    </div>
    <div class="col-md-4">
        <button type="submit" class="btn btn-primary">Search</button>
    </div>
</div>

</form>

<div id="bookingReport">

<h1>booking Reports- {{date('Y-m-d')}}</h1>
  
       

<div class="container">
    <table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="row">Serial Number</th>
            <th>sender name</th>
            <th>sender phone number</th>
            <th>sender address</th>
            <th>Amount</th>
            <th>Receiver name</th>
            <th>Receiver phone number</th>
            <th>Receiver address</th>
            <th>Status</th>
           
        </tr>
    </thead>
    <tbody>
        @if(isset($book))
        @foreach($book as $data)
        <tr>
            <th scope="row">{{$data->id}}</th>
            <td>{{$data->sender_name}}</td>
           
            <td>{{$data->sender_mobile}}</td>
            <td>{{$data->sender_address}}</td>
            <td>{{$data->enter_amount}}</td>
            <td>{{$data->receiver_name}}</td> 
            <td>{{$data->receiver_mobile}}</td>
            <td>{{$data->receiver_address}}</td>           
            <td>{{$data->status}}</td>
            
        </tr>
        @endforeach
        @endif
        
    </tbody>
    </table>
</div>
</div>
<button onclick="printDiv('bookingReport')" class="btn btn-success">Print</button>


<script>
    function printDiv(divId){
        var printContents = document.getElementById(divId).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }
</script>
@endsection