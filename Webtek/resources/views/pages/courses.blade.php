@extends('layouts.pageLayout')

@section('content')

    <section class="site-hero overlay" data-stellar-background-ratio="0.5" style="background-image: url(bootstrap/images/big_image_1.jpg);">
      <div class="container">
        <div class="row align-items-center site-hero-inner justify-content-center">
          <div class="col-md-8 text-center">

            <div class="mb-5 element-animate">
              <h1>Level Up Your Skills</h1>
              <p class="lead">Learn more on our Course Website</p>
              <p><a href="#" class="btn btn-primary">Learn Today!</a></p>
            </div>

            
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->

    <section class="site-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center">
            <h2>Our Courses</h2>
            <p class="lead"></p>
          </div>
        </div>
        <div class="row top-course">
          <div class="col-md-4 col-sm-6 col-12">
            <a href="{{ route('htmlCourse')}}" class="course">
              <img src="{{ asset('bootstrap/images/html5.png') }}" alt="Image placeholder">
              <h2>HTML</h2>
              <p>Enroll Now</p>
            </a>
          </div>
          <div class="col-md-4 col-sm-6 col-12">
            <a href="{{ route('cssCourse')}}" class="course">
              <img src="{{ asset('bootstrap/images/css3.png') }}" alt="Image placeholder">
              <h2>CSS</h2>
              <p>Enroll Now</p>
            </a>
          </div>

          <div class="col-md-4 col-sm-6 col-12">
            <a href="{{ route('jsCourse')}}" class="course">
              <img src="{{ asset('bootstrap/images/javascript.png') }}" alt="Image placeholder">
              <h2>JavaScript</h2>
              <p>Enroll Now</p>
            </a>
          </div>

        </div>

        <!-- END row -->

        {{-- <div class="row top-course">
          <div class="col-lg-2 col-md-4 col-sm-6 col-12">
            <a href="course-single.html" class="course">
              <img src="{{ asset('bootstrap/images/webdesign.jpg') }}" alt="Image placeholder">
              <h2>HTML</h2>
              <p>Enroll Now</p>
            </a>
          </div>
          <div class="col-lg-2 col-md-4 col-sm-6 col-12">
            <a href="course-single.html" class="course">
              <img src="{{ asset('bootstrap/images/css.png') }}" alt="Image placeholder">
              <h2>CSS</h2>
              <p>Enroll Now</p>
            </a>
          </div>
          <div class="col-lg-2 col-md-4 col-sm-6 col-12">
            <a href="course-single.html" class="course">
              <img src="{{ asset('bootstrap/images/javascript.jpg') }}" alt="Image placeholder">
              <h2>JavaScript</h2>
              <p>Enroll Now</p>
            </a>
          </div>
          <div class="col-lg-2 col-md-4 col-sm-6 col-12">
            <a href="course-single.html" class="course">
              <img src="{{ asset('bootstrap/images/php.png') }}" alt="Image placeholder">
              <h2>PHP</h2>
              <p>Enroll Now</p>
            </a>
          </div>
          <div class="col-lg-2 col-md-4 col-sm-6 col-12">
            <a href="course-single.html" class="course">
              <img src="{{ asset('bootstrap/images/nodejs.png') }}" alt="Image placeholder">
              <h2>Node JS</h2>
              <p>Enroll Now</p>
            </a>
          </div>
          <div class="col-lg-2 col-md-4 col-sm-6 col-12">
            <a href="course-single.html" class="course">
              <img src="{{ asset('bootstrap/images/angularjs.jpg') }}" alt="Image placeholder">
              <h2>Learn AngularJS 2</h2>
              <p>Enroll Now</p>
            </a>
          </div>
        </div> --}}
        <!-- END row -->

        
        <div class="row top-course">
          <div class="col-md-4 col-sm-6 col-12">
            <a href="{{ route('phpCourse')}}" class="course">
              <img src="{{ asset('bootstrap/images/php.png') }}" alt="Image placeholder">
              <h2>PHP</h2>
              <p>Enroll Now</p>
            </a>
          </div>
          <div class="col-md-4 col-sm-6 col-12">
            <a href="{{ route('nodeJSCourse')}}" class="course">
              <img src="{{ asset('bootstrap/images/nodejs.png') }}" alt="Image placeholder">
              <h2>Node JS</h2>
              <p>Enroll Now</p>
            </a>
          </div>
        </div>
        <!-- END row -->
      </div>
    </section>
    <!-- END section -->

  
    <footer class="site-footer" style="background-image: url(bootstrap/images/big_image_3.jpg);">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-4">
            <h3>About</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi, accusantium optio unde perferendis eum illum voluptatibus dolore tempora, consequatur minus asperiores temporibus reprehenderit.</p>
          </div>
          <div class="col-md-6 ml-auto">
            <div class="row">
              <div class="col-md-4">
                <ul class="list-unstyled">
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Company</a></li>
                  <li><a href="#">Teachers</a></li>
                  <li><a href="#">Courses</a></li>
                  <li><a href="#">Categories</a></li>
                </ul>
              </div>
              <div class="col-md-4">
                <ul class="list-unstyled">
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Company</a></li>
                  <li><a href="#">Teachers</a></li>
                  <li><a href="#">Courses</a></li>
                  <li><a href="#">Categories</a></li>
                </ul>
              </div>
              <div class="col-md-4">
                <ul class="list-unstyled">
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Company</a></li>
                  <li><a href="#">Teachers</a></li>
                  <li><a href="#">Courses</a></li>
                  <li><a href="#">Categories</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    <!-- END footer -->
    
    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>

@endsection