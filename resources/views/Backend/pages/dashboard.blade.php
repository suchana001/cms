@extends('master') 
@section('contents')
<div class="container mt-3">
    <div class="row">
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            Total Booking
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$totalBooking}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Total Successful Transaction
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$totalSuccessfullTransaction}} BDT.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>



@endsection