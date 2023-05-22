<div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                        <a class="nav-link" href="{{route('dashboard')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <a class="nav-link" href="{{route('customer.index')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                              Customer List
                            </a>
                        

                            <a class="nav-link" href="{{route('branch.index') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Branch
                            </a>
                            
                            <a class="nav-link" href="{{route('parcel.type')}}" >
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Parcel type
                            </a>

                            <a class="nav-link" href="{{route('admin.booking')}}" >
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Booking
                            </a>
                            <a class="nav-link" href="{{route('cargo.type')}}" >
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Cargo
                            </a>
                              
                            <a class="nav-link" href="{{route('admin.dispatch')}}" >
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Dispatch Details
                            </a>

                            <a class="nav-link" href="{{route('admin.contact')}}" >
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                               Contact Details
                            </a>


                            <a class="nav-link" href="{{route('booking.report')}}" >
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Report
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Admin
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">