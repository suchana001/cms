@extends('master')
@section('contents')
<div class="container">
    <div class="container bg-danger">
        @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
        </div>
        @endif
    </div>
</div>
<div class="container">
    <div class="container bg-danger">
        @if ($message = Session::get('error'))
        <div class="alert alert-danger alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
        </div>
        @endif
    </div>
</div>
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
                <th>Transaction Id</th>
                <th>Payment Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($bookingList as $key => $data)
            <tr>
                <th scope="row">{{ $key + 1}}</th>
                <td>{{$data->sender_name}}</td>
                <td>{{$data->sender_mobile}}</td>
                <td>{{$data->sender_address}}</td>
                <td>{{$data->enter_amount}}</td>
                <td>{{$data->receiver_name}}</td>
                <td>{{$data->receiver_mobile}}</td>
                <td>{{$data->receiver_address}}</td>
                <td>{{$data->status}}</td>
                <td>{{$data->tran_id}}</td>
                <td>{{$data->payment_status}}</td>
                <td>
                    @if($data->status != 'failed')
                        @if($data->status != 'delivered')
                            @if($data->status == 'dispatched')
                                <a href="{{route('booking.deliver',$data->id)}}" class="btn btn-sm btn-primary">Deliver</a>
                            @endif
                            <!-- <a href="{{route('admin.booking.delete',$data->id)}}" class="btn btn-sm btn-danger">Delete</a> -->
                            @if($data->status != 'dispatched')
                                <a href="{{route('booking.dispatch',$data->id)}}" class="btn btn-sm btn-success">Dispatch</a>
                            @endif 
                        @endif
                        <a href="{{route('admin.booking.view',$data->id)}}" class="btn btn-sm btn-success">View</a> 
                    @else
                        <h5 class="text-danger"> Failed Payment</h5>
                    @endif
                </td>

            </tr>
            @endforeach

        </tbody>
    </table>
</div>



@endsection