@extends('master') 
@section('contents')



<div class="container mx-auto my-5" id="area">
    <div class="card text-center">
    <div class="card-header">Booking Details</div>
    <div class="card-header">Booking No: {{$booking->id}}</div>
    <div class="card-header">Booking Status: {{$booking->status}}</div>
    <div class="container">

        <div class="col-md-12">
        <table class="table">
    <thead class="thead-dark">
        <tr>
        <th>sender name</th>
        <th>sender email</th>
        <th>sender phone number</th>
        <th>sender address</th>
        <th>sender branch</th>
        <th>sender city</th>
        <th>Amount</th>
        
       
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{$booking->sender_name}}</td>
            <td>{{$booking->sender_email}}</td>
            <td>{{$booking->sender_mobile}}</td>
            <td>{{$booking->sender_address}}</td>
            <td>{{$booking->sender_branch}}</td>
            <td>{{$booking->sender_city}}</td>
            <td>{{$booking->enter_amount}} BDT.</td>

        </tr>
        
    </tbody>
    </table>
        </div>

        <div class="col-md-12">
        <table class="table">
    <thead class="thead-dark">
        <tr>
        
        <th>Receiver name</th>
        <th>Receiver email</th>
        <th>Receiver phone number</th>
        <th>Receiver address</th>
        <th>Receiver branch</th>
        <th>Receiver city</th>
       
        </tr>
    </thead>
    <tbody>
        <tr>
            
            <td>{{$booking->receiver_name}}</td>
            <td>{{$booking->receiver_email}}</td>
            <td>{{$booking->receiver_mobile}}</td>
            <td>{{$booking->receiver_address}}</td>
            <td>{{$booking->receiver_branch}}</td>
            <td>{{$booking->receiver_city}}</td>
          

        </tr>
        
    </tbody>
    </table>
        </div>



    </div>
    <div class="card-footer text-muted">Thanks For Booking</div>
    </div>
</div>

<div class="card-body">
    <div class="container">
</div>
<div id="area">
<input type="button" onclick="printDiv('area')" value="print" />

</div>

    </div>



<script>
function printDiv(mydiv) {
     var printContents = document.getElementById(mydiv).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>

@endsection
