@extends('layouts.pageLayout')

@section('content')

    <section class="site-hero site-hero-innerpage overlay" data-stellar-background-ratio="0.5" style="background-image: url(bootstrap/images/big_image_1.jpg);">
      <div class="container">
        <div class="row align-items-center site-hero-inner justify-content-center">
          <div class="col-md-8 text-center">

            <div class="mb-5 element-animate">
              <h1>Quiz</h1>
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
            <h2>Learn more from our Quiz</h2>
            <p class="lead">You can take any quiz that you want to learn.</p>
          </div>
        </div>
        <div class="row blog-entries">
          <div class="col-md-4 col-sm-6 col-12">
            <a href="{{ route('htmlQuiz') }}" class="blog-entry">
              <img src="{{ asset('bootstrap/images/img_1.jpg') }}" alt="Image placeholder">
              <h2>HTML Quiz</h2>
              <p>January 3, 2018</p>
            </a>
          </div>
          <div class="col-md-4 col-sm-6 col-12">
            <a href="{{ route('cssQuiz') }}" class="blog-entry">
              <img src="{{ asset('bootstrap/images/img_2.jpg') }}" alt="Image placeholder">
              <h2>CSS Quiz</h2>
              <p>January 3, 2018</p>
            </a>
          </div>

          <div class="col-md-4 col-sm-6 col-12">
            <a href="blog-single.html" class="blog-entry">
              <img src="{{ asset('bootstrap/images/img_3.jpg') }}" alt="Image placeholder">
              <h2>Why We Love To Teach You</h2>
              <p>January 3, 2018</p>
            </a>
          </div>

        </div>

        <!-- END row -->

       
      </div>
    </section>
    <!-- END section -->

    


      </div>
    </section>
    <!-- END section -->

    


    
  
    <footer class="site-footer" style="background-image: url(bootstrap/images/big_image_3.jpg);">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-4">
            <h3>About</h3>
            <p>This website is a project of Saint Louis University- Baguio City to share knowledge about the included topics like: PHP, NodeJS, JSP and AJAX.</p>
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