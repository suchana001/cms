@extends('master')
@section('contents')
<div class="container">
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="row">Serial Number</th>
                <th>booking_id</th>
                <th>Vehicle Registration number</th>
                <th>Sender  Name</th>
                <th>Receiver Name</th>
                <th>Booking Cost</th>
            </tr>
        </thead>
        <tbody>
            @foreach( $dispatch as $data)
                <tr>
                    <th scope="row">{{$data->id}}</th>
                    <td>{{$data->booking_id}}</td>
                    <td>{{$data->cargo->vehicle_number}}</td>
                    <td>{{$data->booking->sender_name}}</td>
                    <td>{{$data->booking->receiver_name}}</td>
                    <td>{{$data->booking->enter_amount}} BDT.</td>            
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection