@extends('layouts.pageLayout')

@section('content')

    <section class="site-hero overlay" data-stellar-background-ratio="0.5" style="background-image: url(bootstrap/images/big_image_1.jpg);">
        <div class="container">
          <div class="row align-items-center site-hero-inner justify-content-center">
            <div class="col-md-8 text-center">
  
              <div class="mb-5 element-animate">
                <h1>HTML</h1>
                </div>
            </div>
          </div>
        </div>
      </section>
          <div class="row mb-5 align-items-center">
          
          <div class="col-md-6 overflow order-1">
            <img src="{{ asset('bootstrap/images/htmla.jpg') }}" alt="" class="img-fluid">
          </div>
          <div class="col-md-1 order-2"></div>
          <div class="col-md-5 order-3">
            <h2 class="mb-4">HTML is easy to learn - You will enjoy it.</h2>
            <p>With HTML you can create your own Website.</p>
            <p>The programming language of HTML and the Web which is easy to learn.</p>
           
          </div>

        </div>

        <div class="row align-items-center">
          
          <div class="col-md-6 overflow order-3">
            <img src="{{ asset('bootstrap/images/htmlb.jpg') }}" alt="" class="img-fluid">
          </div>
          <div class="col-md-1 order-2"></div>
          <div class="col-md-5 order-1">
            <h2 class="mb-4">HTML Versions</h2>
  <h3>HTML 1.0</h3>
  <p>HTML 1.0 was the first release of HTML to the world. Not many people were involved in website creation at the time, and the language was very limiting. There really wasn’t much you could do with it bar getting some simple text onto the web. But then, just that got the beardos a-foamin’ back in the day.</p>
  <h3>HTML 2.0</h3>
    <p>HTML 2.0 included everything from the original 1.0 specifications but added a few new features to the mix. HTML 2.0 was the standard for website design until January 1997 and defined many core HTML features for the first time.</p>
     <h3>HTML 3.0</h3>
      <p>More and more people were getting into the HTML game around now, and while the previous standards offered some decent abilities to webmasters (as they became known), they thirsted for more abilities and tags. They wanted to enhance the look of their sites.</p> 
      <h3>HTML 3.2</h3>
        <p>The browser-specific tags kept coming, and it became increasingly apparent that a standard needed to be found. To this end, the » World Wide Web Consortium (abbreviated to the W3C) was founded in 1994 to standardise the language and keep it evolving in the right direction. Their first work was code-named WILBUR, and later became known as » HTML 3.2. </p>
      <h3>HTML 4.01</h3>
        <p>HTML 4.0 was a large evolution of the HTML standards, and the last iteration of classic HTML. Early in development it had the code-name COUGAR. Most of the new functionality brought in this time is from the ill-fated HTML 3.0 spec, as well as a host of trimmings on old tags, a focus on internationalisation, and support for HTML’s new supporting presentational language, cascading stylesheets.</p>
       <h3>XHTML 1.0</h3>
        <p>Close to the beginning of the 21st century the W3C issued their » specifications of XHTML 1.0 as a recommendation. Since January 26, 2000 it stands as the joint-standard with HTML 4.01. XHTML marks a departure from the way new specs have worked — it is an entirely new branch of HTML, incorporating the rigours of » XML, so that code must be properly written if it is to work once it reaches the reader’s browser. There weren’t many new or deprecated tags and attributes in XHTML, but some things changed with a view of increased accessibility and functionality. It’s mainly just a new set of coding rules. Read all about it properly in XHTML Explained.</p>
      <h3>HTML5</h3>
         <p>HTML5 is designed for the web, both now and in the future. This is the specification that we will be working with for the next decade at least, so the process of its development is relatively slow and considered. Many parts will be familiar, but there’s also plenty of new elements, attributes and abilities to get excited about. You can check the latest version of the spec if you want all the detail. A full tutorial on HTML Source about the changes in HTML5 is forthcoming.</p>
          </div>

        </div>
        </div>
      </section>
@endsection
