@extends('layouts.pageLayout')

@section('content')

    <section class="site-hero overlay" data-stellar-background-ratio="0.5" style="background-image: url(bootstrap/images/big_image_1.jpg);">
        <div class="container">
          <div class="row align-items-center site-hero-inner justify-content-center">
            <div class="col-md-8 text-center">
  
              <div class="mb-5 element-animate">
                <h1>JavaScript</h1>
              </div>
            </div>
          </div>
        </div>
      </section>

      <div class="row mb-5 align-items-center">
          
          <div class="col-md-6 overflow order-1">
            <img src="{{ asset('bootstrap/images/js1.jpg') }}" alt="" class="img-fluid">
          </div>
          <div class="col-md-1 order-2"></div>
          <div class="col-md-5 order-3">
            <h2 class="mb-4">First, What is JavaScript?</h2>
            <p>The developer of JavaScript is Brendan Eich on 1995.</p>
            <p>The programming language of HTML and the Web which is easy to learn.</p>
           
          </div>

        </div>

        <div class="row align-items-center">
          
          <div class="col-md-6 overflow order-3">
            <img src="{{ asset('bootstrap/images/js2.jpg') }}" alt="" class="img-fluid">
          </div>
          <div class="col-md-1 order-2"></div>
          <div class="col-md-5 order-1">
            <h2 class="mb-4">JavaScript Frameworks</h2>
            <p>jQuery.</p>
            <p>MooTools.</p>
            <p>Prototype.</p>
            <p>YUI Library.</p>
            <p>Dojo Toolkit.</p>
          </div>

        </div>

      </div>
    </section>
@endsection
