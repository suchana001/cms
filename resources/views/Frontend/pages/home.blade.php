@extends('Frontend.master')
@section('content')


<section class="py-xxl-10 pb-0" id="home">
  <div class="bg-holder bg-size" style="background-image:url(assets/img/gallery/hero-header-bg.png);background-position:top center;background-size:cover;">
  </div>
  <!--/.bg-holder-->

  <div class="container">
    <div class="row align-items-center">

      <div class="col-md-75 col-xl-6 col-xxl-5 text-md-start text-center py-8">
        <h1 class="fw-normal fs-6 fs-xxl-7">A trusted provider of </h1>
        <h1 class="fw-bolder fs-6 fs-xxl-7 mb-2">courier services.</h1>
        <p class="fs-1 mb-5">We deliver your products safely to <br />your home in a reasonable time. </p>
      </div>
    </div>
  </div>
</section>
@auth
<section>
  <!-- modal -->
  <div class="container">
    <div class="row">
      <div class="col-12">
        <!-- bookingList table -->
        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="row">Serial Number</th>
              <th>Sender Name</th>
              <th>Sender Phone Number</th>
              <th>Amount</th>
              <th>Receiver Name</th>
              <th>Receiver Email</th>
              <th>Receiver Phone Number</th>
              <th>Receiver Address</th>
              <th>Receiver Branch</th>
              <th>Receiver City</th>
              <th>Percel Type</th>
              <th>Quantity</th>
              <th>Status</th>
              <th>Transaction Id</th>
              <th>Payment Status</th>
            </tr>
          </thead>
          <tbody>
            @foreach($list as $data)
            <tr>
              <th scope="row">{{$data->id}}</th>
              <td>{{$data->sender_name}}</td>
              <td>{{$data->sender_mobile}}</td>
              <td>{{$data->enter_amount}} BDT.</td>
              <td>{{$data->receiver_name}}</td>
              <td>{{$data->receiver_email}}</td>
              <td>{{$data->receiver_mobile}}</td>
              <td>{{$data->receiver_address}}</td>
              <td>{{$data->receiver_branch}}</td>
              <td>{{$data->receiver_city}}</td>
              <td>{{$data->percel_type}}</td>
              <td>{{$data->quantity}}</td>
              <td>{{$data->status}}</td>
              <td>{{$data->tran_id}}</td>
              <td>{{$data->payment_status}}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <!-- end of .container-->

</section>
@endauth

<section class="py-7">

  <div class="container-fluid">
    <div class="row flex-center">
      <div class="bg-holder bg-size" style="background-image:url(assets/img/gallery/quote.png);background-position:top;background-size:auto;margin-left:-270px;margin-top:-45px;">
      </div>
      <!--/.bg-holder-->
    </div>


    <!-- Modal for reg-->
    <div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index: 99999;">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Customer Registration</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">

            <form action="{{route('registration')}}" method="post" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <label for="name">Enter Your Name:</label>
                <input required name="customer_name" type="text" class="form-control" id="name" placeholder="Enter name">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input required name="customer_email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
              </div>

              <div class="form-group">
                <label for="number">Phone Number</label>
                <input required name="customer_phone" type="text" class="form-control" id="number" placeholder="Enter Number">
              </div>

              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input required name="customer_password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
              </div>

              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>

        </div>
      </div>
    </div>

  </div>

</section>


<!-- Modal for login-->
<div class="modal fade" id="log" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index: 99999;">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Customer Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{route('user.login')}}" method="post">
          @csrf
          <div class="modal-body">

            <div>
              <label for="">Enter your email</label>
              <input required name="email" type="email" class="form-control" required placeholder="Enter email">
            </div>

            <div>
              <label for="">Enter your password</label>
              <input required name="password" type="password" class="form-control" required placeholder="Enter password">
            </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>

      </div>
    </div>
  </div>
</div>


<!-- For bookig -->
<div class="modal fade" id="booking" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index: 99999;">

  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Booking's Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form action="{{route('ssl.payment')}}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="name">Enter Sender Name:</label>
                <input required name="sender_name" type="text" class="form-control" id="name" placeholder="Enter Sender name">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Sender Email</label>
                <input required name="sender_email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Sender email">
              </div>

              <div class="form-group">
                <label for="number">Sender Phone Number</label>
                <input required name="sender_mobile" type="text" class="form-control" id="number" placeholder="Enter Sender Number">
              </div>

              <div class="form-group">
                <label for="number">Sender Branch</label>
                <select name="sender_branch">
                  @foreach($branch as $data)
                  <option repuired value="{{$data->id}}">{{$data->Brance_name}}</option>
                  @endforeach
                </select>

              </div>
              <div class="form-group">
                <label for="number">Sender Address</label>
                <input required name="sender_address" type="text" class="form-control" id="name" placeholder="Enter Sender Address">
              </div>
              <div class="form-group">
                <label for="number">Sender City</label>
                <input required name="sender_city" type="text" class="form-control" id="name" placeholder="Enter Sender city">
              </div>

            </div>


            <div class="col-md-6">
              <div class="form-group">
                <label for="name">Enter Receiver Name:</label>
                <input required name="receiver_name" type="double" class="form-control" id="name" placeholder="Enter Receiver name">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Receiver Email</label>
                <input required name="receiver_email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
              </div>

              <div class="form-group">
                <label for="number">Reciever Phone Number</label>
                <input required name="receiver_mobile" type="text" class="form-control" id="number" placeholder="Enter Receiver Number">
              </div>

              <div class="form-group">
                <label required for="number">Receiver Branch</label>

                <select required name="receiver_branch">
                  @foreach($branch as $data)
                  <option value="{{$data->id}}">{{$data->Brance_name}}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <label for="number">Receiver Address</label>
                <input required name="receiver_address" type="text" class="form-control" id="name" placeholder="Enter Receiver Address">
              </div>
              <div class="form-group">
                <label for="number">Receiver City</label>
                <input required name="receiver_city" type="text" class="form-control" id="name" placeholder="Enter Receiver city">
              </div>
              <div class="form-group">
                <label for="number">Percel Type</label>
                <select required name="percel_type">
                  @foreach($percelTypes as $data)
                  <option value="{{$data->id}}">Type: {{$data->parcel_type}} <span>Unit Price: {{$data->unit_price}}</span></option>
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <label for="number">Quantity</label>
                <input required type="number" name="quantity" placeholder="enter the amount of parcel" class="form-control">
              </div>
            </div>
          </div>


          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>




</div>

@endsection