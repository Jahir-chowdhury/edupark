<div class="container-fluid">
        <div class="contact-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-xs-6 col-sm-12">
                        <div class="email">
                            <i class="fas fa-envelope">  help@educationsystem.com.bd</i>
                        </div>
                    </div>
                    
                    <div class="col-md-3 col-xs-6 col-sm-12">
                        <div class="phone">
                          <i class="fas fa-mobile-alt"> +880 17 79 85 85 86</i>
                        </div>
                    </div>

                    <div class="col-md-2 col-xs-6 col-sm-12">
                        <div class="social-icon">
                          <a href="#"><img src="{{asset('public/frontEnd/img/facebook.png')}}" alt=""></a>
                          <a href="#"><img src="{{asset('public/frontEnd/img/twitter.png')}}" alt=""></a>
                          <a href="#"><img src="{{asset('public/frontEnd/img/g+.png')}}" alt=""></a>
                          <a href="#"><img src="{{asset('public/frontEnd/img/twitter.png')}}" alt=""></a>
                        </div>
                    </div>

                    <div class="col-md-4 col-xs-6 col-sm-12">
                        <div class="login">
							<a href="{{url('/login')}}">Login</a>
                        </div>
                        <div class="create-account">
							<a href="{{url('/register')}}">Create an account</a>
							<a href="{{url('/logout')}}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                        </form>
						</div>                        
                    </div>
                </div>  <!-- row -->
            </div>  <!-- container -->
        </div>  <!-- contact-header -->
    </div>  <!-- container-fluid -->

    <!-- contact-header end -->

    <!-- Menu Start -->

    <div class="container">
        <div class="menu">
            <nav class="navbar navbar-expand-lg navbar-light bg-white">
             
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
                <div class="collapse navbar-collapse justify-content nav justify-content-end" id="navbarNavAltMarkup">
                    <d iv class="navbar-nav">
                      <a class="nav-item nav-link" href="#">Tution job</a>
                      <a class="nav-item nav-link" href="#">Part time job</a>
                      <a class="nav-item nav-link" href="#">Contractual job</a>
                      <a class="nav-item nav-link" href="#">Teaching job</a>
                    </div>
            </nav>
        </div> <!-- menu -->
    </div> <!-- container -->

    <!-- Menu end -->