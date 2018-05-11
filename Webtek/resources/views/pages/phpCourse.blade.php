@extends('layouts.pageLayout')

@section('content')

    <section class="site-hero overlay" data-stellar-background-ratio="0.5" style="background-image: url(bootstrap/images/big_image_1.jpg);">
        <div class="container">
          <div class="row align-items-center site-hero-inner justify-content-center">
            <div class="col-md-8 text-center">
  
              <div class="mb-5 element-animate">
                <h1>PHP</h1>
              </div>
            </div>
          </div>
        </div>
      </section>


      
      <div class="row mb-5 align-items-center">
          
          <div class="col-md-6 overflow order-1">
            <img src="{{ asset('bootstrap/images/php1.jpg') }}" alt="" class="img-fluid">
          </div>
          <div class="col-md-1 order-2"></div>
          <div class="col-md-5 order-3">
            <h2 class="mb-4">Are you ready for PHP Development?</h2>
            <p>is a popular general-purpose scripting language that is especially suited to web development.</p>
            <p>Fast, flexible and pragmatic, PHP powers everything from your blog to the most popular websites in the world.</p>
           
          </div>

        </div>

        <div class="row align-items-center">
          
          <div class="col-md-6 overflow order-3">
            <img src="{{ asset('bootstrap/images/php2.png') }}" alt="" class="img-fluid">
          </div>
          <div class="col-md-1 order-2"></div>
          <div class="col-md-5 order-1">
            <h2 class="mb-4">What is an API?</h2>
            <p>An Application Programming Interface, or API, defines the classes, methods, functions and variables that your application will need to call in order to carry out its desired task. In the case of PHP applications that need to communicate with databases the necessary APIs are usually exposed via PHP extensions.</p>
            <p>APIs can be procedural or object-oriented. With a procedural API you call functions to carry out tasks, with the object-oriented API you instantiate classes and then call methods on the resulting objects. Of the two the latter is usually the preferred interface, as it is more modern and leads to better organized code. </p>
            <p>When writing PHP applications that need to connect to the MySQL server there are several API options available. This document discusses what is available and how to select the best solution for your application. </p>
          
          </div>

        </div>

      </div>
    </section>
@endsection
