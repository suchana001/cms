<nav class="navbar navbar-expand-lg navbar-light fixed-top py-3 d-block" data-navbar-on-scroll="data-navbar-on-scroll">
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"> </span></button>
        <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto pt-2 pt-lg-0 font-base">
           
            <li class="nav-item px-2"><a class="nav-link" href="#findUs">Find Us</a></li>
            <!-- <li class="nav-item px-2"><a class="nav-link" >Payment</a></li> -->
            @auth
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#booking">
          Booking
          </button>
            <a class="nav-item nav-link">
            <li class="nav-item px-2"><a href="{{route('user.profile')}}" class="nav-item nav-link">  </li>
          
            {{auth()->user()->name}}</a>
            <li class="nav-item px-2"><a href="{{route('user.logout')}}" class="nav-link" >Logout</a></li>
            @else
            <div class="row">
              <div class="col-md-4">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#log">
                  Login
                </button>

              </div>
             
              
              <div class="col-md-4">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#register">
                Registration
                </button>

              </div>
              <div class="col-md-3"></div>
            </div>



          
          @endauth
          

      

    </nav>
    
    
    


