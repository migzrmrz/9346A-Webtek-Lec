<?php include('head.php'); ?>
<?php include('nav.php'); ?>

    <section class="site-hero overlay" data-stellar-background-ratio="0.5" style="background-image: url(images/big_image_1.jpg);">
      <div class="container">
        <div class="row align-items-center site-hero-inner justify-content-center">
          <div class="col-md-8 text-center">

            <div class="mb-5 element-animate">
              <h1>Learn From Doing</h1>
              <p class="lead">Learn something new every day with Webtek!</p>
              <p><a href="#" class="btn btn-primary">Learn Today!</a></p>
            </div>

            
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->
    <section class="school-features d-flex" style="background-image: url(images/big_image_3.jpg);">

      <div class="inner">
        <div class="media d-block feature">
          <div class="icon"><span class="flaticon-video-call"></span></div>
          <div class="media-body">
            <h3 class="mt-0">PHP</h3>
            <p>PHP is a popular general-purpose scripting language that is especially suited to web development. Fast, flexible and pragmatic, PHP powers everything from your blog to the most popular websites in the world.</p>
          </div>
        </div>

        <div class="media d-block feature">
          <div class="icon"><span class="flaticon-student"></span></div>
          <div class="media-body">
            <h3 class="mt-0">NodeJS</h3>
            <p>is a JavaScript runtime built on Chrome's V8 JavaScript engine. Node.js uses an event-driven, non-blocking I/O model that makes it lightweight and efficient. Node.js' package ecosystem, npm, is the largest ecosystem of open source libraries in the world.</p>
          </div>
        </div>

        <div class="media d-block feature">
          <div class="icon"><span class="flaticon-video-player-1"></span></div>
          <div class="media-body">
            <h3 class="mt-0">JSP</h3>
            <p>Simply an HTML web page that contains additional bits of code that execute application logic to generate dynamic content. Java Server Pages Actions (JSP tags) perform a variety of functions and extend the capabilities of JSP.</p>
          </div>
        </div>


        <div class="media d-block feature">
          <div class="icon"><span class="flaticon-audiobook"></span></div>
          <div class="media-body">
            <h3 class="mt-0">AJAX</h3>
            <p>Stands for Asynchronous JavaScript And XML. In a nutshell, it is the use of the XMLHttpRequest object to communicate with servers. It can send and receive information in various formats, including JSON, XML, HTML, and text files. AJAX’s most appealing characteristic is its "asynchronous" nature, which means it can communicate with the server, exchange data, and update the page without having to refresh the page.</p>
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->
    <section class="site-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 text-center">
                <h2>Courses Offered</h2>
            </div>  
        </div>  
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>
      
          <!-- Wrapper for slides -->
          <div class="carousel-inner">
      
            <div class="item active">
              <img src="la.jpg" alt="Los Angeles" style="width:100%;">
              <div class="carousel-caption">
                <h3>Los Angeles</h3>
                <p>LA is always so much fun!</p>
              </div>
            </div>
      
            <div class="item">
              <img src="chicago.jpg" alt="Chicago" style="width:100%;">
              <div class="carousel-caption">
                <h3>Chicago</h3>
                <p>Thank you, Chicago!</p>
              </div>
            </div>
          
            <div class="item">
              <img src="ny.jpg" alt="New York" style="width:100%;">
              <div class="carousel-caption">
                <h3>New York</h3>
                <p>We love the Big Apple!</p>
              </div>
            </div>
        
          </div>
      
          <!-- Left and right controls -->
          <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </section>
    <!-- <section class="site-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center">
            <h2>Top Courses</h2>
            <p class="lead">These are the Courses offered in Webtek</p>
          </div>
        </div>
        <div class="row top-course">
          <div class="col-lg-2 col-md-4 col-sm-6 col-12">
            <a href="#" class="course">
              <img src="images/webdesign.jpg" alt="Image placeholder">
              <h2>Web Design 101</h2>
              <p>Enroll Now</p>
            </a>
          </div>
          <div class="col-lg-2 col-md-4 col-sm-6 col-12">
            <a href="#" class="course">
              <img src="images/wordpress.jpg" alt="Image placeholder">
              <h2>Learn How To Develop WordPress Plugin</h2>
              <p>Enroll Now</p>
            </a>
          </div>
          <div class="col-lg-2 col-md-4 col-sm-6 col-12">
            <a href="#" class="course">
              <img src="images/javascript.jpg" alt="Image placeholder">
              <h2>JavaScript 101</h2>
              <p>Enroll Now</p>
            </a>
          </div>
          <div class="col-lg-2 col-md-4 col-sm-6 col-12">
            <a href="#" class="course">
              <img src="images/photoshop.jpg" alt="Image placeholder">
              <h2>Photoshop Design 101</h2>
              <p>Enroll Now</p>
            </a>
          </div>
          <div class="col-lg-2 col-md-4 col-sm-6 col-12">
            <a href="#" class="course">
              <img src="images/reactjs.jpg" alt="Image placeholder">
              <h2>Learn Native ReactJS</h2>
              <p>Enroll Now</p>
            </a>
          </div>
          <div class="col-lg-2 col-md-4 col-sm-6 col-12">
            <a href="#" class="course">
              <img src="images/angularjs.jpg" alt="Image placeholder">
              <h2>Learn AngularJS 2</h2>
              <p>Enroll Now</p>
            </a>
          </div>
        </div>
      </div>
    </section> -->
  
<?php include('footer.php'); ?>
<?php include('footerScript.php'); ?>