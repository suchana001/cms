<section>

        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5 col-xl-4"><img src="{{url('/Fronted/img/illustrations/callback.png')}}" alt="..." />
              <h5 class="text-danger">REQUEST A CALLBACK</h5>
              <h2>We will contact in the shortest time.</h2>
            
            </div>
            
            <div class="col-md-6 col-lg-5 col-xl-4">
              <form action="{{route('contact.store')}}" class="row" method="post">
                @csrf
                <div class="mb-3">
                  <label class="form-label visually-hidden" for="inputName">Name</label>
                  <input class="form-control form-quriar-control" id="inputName" type="text" placeholder="Name" name="name"/>
                </div>
                <div class="mb-3">
                  <label class="form-label visually-hidden" for="inputEmail">Another label</label>
                  <input class="form-control form-quriar-control" id="inputEmail" type="email" placeholder="Email" name="email" />
                </div>
                <div class="mb-5">
                  <label class="form-label visually-hidden" for="validationTextarea">Message</label>
                  <textarea class="form-control form-quriar-control is-invalid border-400" id="validationTextarea" placeholder="Message" name="message" style="height: 150px" required="required"></textarea>
                </div>
                <div class="d-grid">
                  <button class="btn btn-primary" type="submit">Send Message<i class="fas fa-paper-plane ms-2"></i></button>
                </div>
              </form>
            </div>
          </div>
        </div>

      </section>
      <section id="findUs">

        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-8 col-lg-5 mb-6 text-center">
              <h5 class="text-danger">FIND US</h5>
              <h2>Access Us Easily!</h2>
            </div>
            <div class="col-12">
              <div class="card card-span rounded-2 mb-3">
                <div class="row">
                 
                  <div class="col-md-5 col-lg-4 d-flex flex-center">
                    <div class="card-body">
                      <h1>Contact with us</h1>
                      <h5>Our Main Branch</h5>
                      <p class="text-700 my-4"> <i class="fas fa-map-marker-alt text-warning me-3"></i><span>House:1,Road:2,Dhanmondi,Dhaka,Bangladesh</span><br>Contact Number:01324-567890</p>
                      <p><i class="fas fa-phone-alt text-warning me-3"></i><span class="text-700">Saturday-Friday: 9am - 7pm</span></p>
                     
                      <ul class="list-unstyled list-inline mt-5">
                        <li class="list-inline-item"><a class="text-decoration-none" href="#!"><i class="fab fa-facebook-square fs-2"></i></a></li>
                        <li class="list-inline-item"><a class="text-decoration-none" href="#!"><i class="fab fa-instagram-square fs-2"></i></a></li>
                        <li class="list-inline-item"><a class="text-decoration-none" href="#!"><i class="fab fa-twitter-square fs-2"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="text-center">
                
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="bg-1000">

        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <h2 class="fw-bold text-white">Get an update every week</h2>
              <p class="text-300">We ensure that your product is delivered in the safest possible<br />manner, at the correct location, at the right time.</p>
            </div>
           
          </div>
        </div>
      </section>
      <section class="py-0 bg-1000">

        <div class="container">
          <div class="row justify-content-md-between justify-content-evenly py-4">
            <div class="col-12 col-sm-8 col-md-6 col-lg-auto text-center text-md-start">
              <p class="fs--1 my-2 fw-bold text-200">All rights Reserved &copy; Name of the Company, 2023</p>
            </div>
            <div class="col-12 col-sm-8 col-md-6">
              <p class="fs--1 my-2 text-center text-md-end text-200"> Made&nbsp;
                <svg class="bi bi-suit-heart-fill"  width="12" height="12" fill="#F95C19" viewBox="0 0 16 16">
                  
                </svg>&nbsp;by&nbsp;<a class="fw-bold text-primary" target="_blank">Umme Sumaiya Suchana</a>
              </p>
            </div>
          </div>
        </div>

      </section>