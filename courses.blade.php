@extends('layouts.pageLayout')

@section('content')

    <section class="site-hero overlay" data-stellar-background-ratio="0.5" style="background-image: url(bootstrap/images/big_image_1.jpg);">
      <div class="container">
        <div class="row align-items-center site-hero-inner justify-content-center">
          <div class="col-md-8 text-center">

            <div class="mb-5 element-animate">
              <h1>Level Up Your Skills</h1>
              <p class="lead">See our courses Below. Learn something new every day with skwela lorem ipsum dolor sit amet.</p>
              <p><a href="#" class="btn btn-primary">Sign up and get a 7-day free trial</a></p>
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
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum magnam illum maiores adipisci pariatur, eveniet.</p>
          </div>
        </div>
        <div class="row top-course">
          <div class="col-md-4 col-sm-6 col-12">
            <a href="course-single.html" class="course">
              <img src="{{ asset('bootstrap/images/webdesign.jpg') }}" alt="Image placeholder">
              <h2>Web Design 101</h2>
              <p>Enroll Now</p>
            </a>
          </div>
          <div class="col-md-4 col-sm-6 col-12">
            <a href="course-single.html" class="course">
              <img src="{{ asset('bootstrap/images/wordpress.jpg') }}" alt="Image placeholder">
              <h2>Learn How To Develop WordPress Plugin</h2>
              <p>Enroll Now</p>
            </a>
          </div>

          <div class="col-md-4 col-sm-6 col-12">
            <a href="course-single.html" class="course">
              <img src="{{ asset('bootstrap/images/javascript.jpg') }}" alt="Image placeholder">
              <h2>JavaScript 101</h2>
              <p>Enroll Now</p>
            </a>
          </div>

        </div>

        <!-- END row -->

        <div class="row top-course">
          <div class="col-lg-2 col-md-4 col-sm-6 col-12">
            <a href="course-single.html" class="course">
              <img src="{{ asset('bootstrap/images/webdesign.jpg') }}" alt="Image placeholder">
              <h2>Web Design 101</h2>
              <p>Enroll Now</p>
            </a>
          </div>
          <div class="col-lg-2 col-md-4 col-sm-6 col-12">
            <a href="course-single.html" class="course">
              <img src="{{ asset('bootstrap/images/wordpress.jpg') }}" alt="Image placeholder">
              <h2>Learn How To Develop WordPress Plugin</h2>
              <p>Enroll Now</p>
            </a>
          </div>
          <div class="col-lg-2 col-md-4 col-sm-6 col-12">
            <a href="course-single.html" class="course">
              <img src="{{ asset('bootstrap/images/javascript.jpg') }}" alt="Image placeholder">
              <h2>JavaScript 101</h2>
              <p>Enroll Now</p>
            </a>
          </div>
          <div class="col-lg-2 col-md-4 col-sm-6 col-12">
            <a href="course-single.html" class="course">
              <img src="{{ asset('bootstrap/images/photoshop.jpg') }}" alt="Image placeholder">
              <h2>Photoshop Design 101</h2>
              <p>Enroll Now</p>
            </a>
          </div>
          <div class="col-lg-2 col-md-4 col-sm-6 col-12">
            <a href="course-single.html" class="course">
              <img src="{{ asset('bootstrap/images/reactjs.jpg') }}" alt="Image placeholder">
              <h2>Learn Native ReactJS</h2>
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
        </div>
        <!-- END row -->

        
        <div class="row top-course">
          <div class="col-md-4 col-sm-6 col-12">
            <a href="course-single.html" class="course">
              <img src="{{ asset('bootstrap/images/photoshop.jpg') }}" alt="Image placeholder">
              <h2>Photoshop Design 101</h2>
              <p>Enroll Now</p>
            </a>
          </div>
          <div class="col-md-4 col-sm-6 col-12">
            <a href="course-single.html" class="course">
              <img src="{{ asset('bootstrap/images/reactjs.jpg') }}" alt="Image placeholder">
              <h2>Learn Native ReactJS</h2>
              <p>Enroll Now</p>
            </a>
          </div>
          <div class="col-md-4 col-sm-6 col-12">
            <a href="course-single.html" class="course">
              <img src="{{ asset('bootstrap/images/angularjs.jpg') }}" alt="Image placeholder">
              <h2>Learn AngularJS 2</h2>
              <p>Enroll Now</p>
            </a>
          </div>
        </div>
        <!-- END row -->
      </div>
    </section>
    <!-- END section -->

    <section class="site-section">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center">
            <h2>Meet Your Instructors</h2>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum magnam illum maiores adipisci pariatur, eveniet.</p>
          </div>
        </div>
        <section class="school-features text-dark d-flex">

          <div class="inner">
            <div class="media d-block feature text-center">
              <img src="{{ asset('bootstrap/images/person_1.jpg') }}" alt="Image placeholder" class="mb-3">
              <div class="media-body">
                <h3 class="mt-0">Rhea Smith</h3>
                <p class="instructor-meta">WordPress Expert</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora fuga suscipit numquam esse saepe quam, eveniet iure assumenda dignissimos aliquam!</p>
              </div>
            </div>

            <div class="media d-block feature text-center">
              <img src="{{ asset('bootstrap/images/person_2.jpg') }}" alt="Image placeholder" class="mb-3">
              <div class="media-body">
                <h3 class="mt-0">Gregg White</h3>
                <p class="instructor-meta">HTML4, CSS3 Expert</p>
                <p>Delectus fuga voluptatum minus amet, mollitia distinctio assumenda voluptate quas repellat eius quisquam odio. Aliquam, laudantium, optio? Error velit, alias.</p>
              </div>
            </div>

            <div class="media d-block feature text-center">
              <img src="{{ asset('bootstrap/images/person_3.jpg') }}" alt="Image placeholder" class="mb-3">
              <div class="media-body">
                <h3 class="mt-0">Rob Gold</h3>
                <p class="instructor-meta">JS Expert</p>
                <p>Delectus fuga voluptatum minus amet, mollitia distinctio assumenda voluptate quas repellat eius quisquam odio. Aliquam, laudantium, optio? Error velit, alias.</p>
              </div>
            </div>


            <div class="media d-block feature text-center">
              <img src="{{ asset('bootstrap/images/person_4.jpg') }}" alt="Image placeholder" class="mb-3">
              <div class="media-body">
                <h3 class="mt-0">Wennie Poe</h3>
                <p class="instructor-meta">Angular JS Expert</p>
                <p>Harum, adipisci, aspernatur. Vero repudiandae quos ab debitis, fugiat culpa obcaecati, voluptatibus ad distinctio cum soluta fugit sed animi eaque?</p>
              </div>
            </div>
          </div>
        </section>

        <section class="school-features text-dark last d-flex">

          <div class="inner">
            <div class="media d-block feature text-center">
              <img src="{{ asset('bootstrap/images/person_1.jpg') }}" alt="Image placeholder" class="mb-3">
              <div class="media-body">
                <h3 class="mt-0">Rhea Smith</h3>
                <p class="instructor-meta">WordPress Expert</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora fuga suscipit numquam esse saepe quam, eveniet iure assumenda dignissimos aliquam!</p>
              </div>
            </div>

            <div class="media d-block feature text-center">
              <img src="{{ asset('bootstrap/images/person_2.jpg') }}" alt="Image placeholder" class="mb-3">
              <div class="media-body">
                <h3 class="mt-0">Gregg White</h3>
                <p class="instructor-meta">Photoshop Expert</p>
                <p>Delectus fuga voluptatum minus amet, mollitia distinctio assumenda voluptate quas repellat eius quisquam odio. Aliquam, laudantium, optio? Error velit, alias.</p>
              </div>
            </div>

            <div class="media d-block feature text-center">
              <img src="{{ asset('bootstrap/images/person_3.jpg') }}" alt="Image placeholder" class="mb-3">
              <div class="media-body">
                <h3 class="mt-0">Rob Gold</h3>
                <p class="instructor-meta">Web Design Expert</p>
                <p>Delectus fuga voluptatum minus amet, mollitia distinctio assumenda voluptate quas repellat eius quisquam odio. Aliquam, laudantium, optio? Error velit, alias.</p>
              </div>
            </div>


            <div class="media d-block feature text-center">
              <img src="{{ asset('bootstrap/images/person_4.jpg') }}" alt="Image placeholder" class="mb-3">
              <div class="media-body">
                <h3 class="mt-0">Wennie Poe</h3>
                <p class="instructor-meta">React JS Expert</p>
                <p>Harum, adipisci, aspernatur. Vero repudiandae quos ab debitis, fugiat culpa obcaecati, voluptatibus ad distinctio cum soluta fugit sed animi eaque?</p>
              </div>
            </div>
          </div>
        </section>


      </div>
    </section>
    <!-- END section -->

    <section class="section-cover bg-dark">
      <div class="container">
        <div class="row justify-content-center align-items-center intro">
          <div class="col-md-7 text-center element-animate">
            <h2>Sign Up And Get a 7-day Free Trial</h2>
            <p class="lead mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto quidem tempore expedita facere facilis, dolores!</p>
            <p><a href="#" class="btn btn-primary">Sign up and get a 7-day free trial</a></p>
          </div>
        </div>
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