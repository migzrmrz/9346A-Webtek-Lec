@extends('layouts.pageLayout')

@section('content')

    <section class="site-hero site-hero-innerpage overlay" data-stellar-background-ratio="0.5" style="background-image: url(bootstrap/images/big_image_1.jpg);">
      <div class="container">
        <div class="row align-items-center site-hero-inner justify-content-center">
          <div class="col-md-8 text-center">

            <div class="mb-5 element-animate">
              <h1>What is it all about?</h1>
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
            <h2>We Share Our Thoughts</h2>
            <p class="lead">This website is a project of Saint Louis University- Baguio City to share knowledge about the included topics like: PHP, NodeJS, JSP and AJAX.</p>
          </div>
        </div>
        <!-- <div class="row align-items-center">
          
          <div class="col-md-5">
            <h2 class="mb-4">First, We Love To Teach</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur reprehenderit laboriosam, eius ipsa consequuntur eos. Nulla dolorem repudiandae mollitia distinctio eos pariatur dolores, voluptate impedit. Eaque quos, sapiente ipsum possimus.</p>
            <p>Odio ducimus id vero tempora eaque rem voluptatibus tempore sequi ea quod, odit commodi voluptas! Nesciunt dolorum ea repudiandae. Officia eos impedit sapiente tempore, a dolore minus eaque culpa facere.</p>
            <p>Qui dolore quaerat expedita fugiat aperiam consequatur pariatur quod perspiciatis alias magni, recusandae esse dolorem beatae commodi quo labore earum harum odio voluptatibus non, error perferendis at delectus. Ab, amet.</p>
          </div>
          <div class="col-md-1"></div>
          <div class="col-md-6 overflow">
            <img src="images/img_2.jpg" alt="" class="img-fluid">
          </div>
        </div> -->

        <div class="row mb-5 align-items-center">
          
          <div class="col-md-6 overflow order-1">
            <img src="{{ asset('bootstrap/images/img_1.jpg') }}" alt="" class="img-fluid">
          </div>
          <div class="col-md-1 order-2"></div>
          <div class="col-md-5 order-3">
            <h2 class="mb-4">First, We Love To Teach</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur reprehenderit laboriosam, eius ipsa consequuntur eos. Nulla dolorem repudiandae mollitia distinctio eos pariatur dolores, voluptate impedit. Eaque quos, sapiente ipsum possimus.</p>
            <p>Odio ducimus id vero tempora eaque rem voluptatibus tempore sequi ea quod, odit commodi voluptas! Nesciunt dolorum ea repudiandae. Officia eos impedit sapiente tempore, a dolore minus eaque culpa facere.</p>
            <p>Qui dolore quaerat expedita fugiat aperiam consequatur pariatur quod perspiciatis alias magni, recusandae esse dolorem beatae commodi quo labore earum harum odio voluptatibus non, error perferendis at delectus. Ab, amet.</p>
          </div>

        </div>

        <div class="row align-items-center">
          
          <div class="col-md-6 overflow order-3">
            <img src="{{ asset('bootstrap/images/img_2.jpg') }}" alt="" class="img-fluid">
          </div>
          <div class="col-md-1 order-2"></div>
          <div class="col-md-5 order-1">
            <h2 class="mb-4">We Are Passionate About Web</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur reprehenderit laboriosam, eius ipsa consequuntur eos. Nulla dolorem repudiandae mollitia distinctio eos pariatur dolores, voluptate impedit. Eaque quos, sapiente ipsum possimus.</p>
            <p>Odio ducimus id vero tempora eaque rem voluptatibus tempore sequi ea quod, odit commodi voluptas! Nesciunt dolorum ea repudiandae. Officia eos impedit sapiente tempore, a dolore minus eaque culpa facere.</p>
            <p>Qui dolore quaerat expedita fugiat aperiam consequatur pariatur quod perspiciatis alias magni, recusandae esse dolorem beatae commodi quo labore earum harum odio voluptatibus non, error perferendis at delectus. Ab, amet.</p>
          </div>

        </div>

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