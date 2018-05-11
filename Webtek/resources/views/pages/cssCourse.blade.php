@extends('layouts.pageLayout')

@section('content')

    <section class="site-hero overlay" data-stellar-background-ratio="0.5" style="background-image: url(bootstrap/images/big_image_1.jpg);">
        <div class="container">
          <div class="row align-items-center site-hero-inner justify-content-center">
            <div class="col-md-8 text-center">
  
              <div class="mb-5 element-animate">
                <h1>CSS</h1>
              </div>
            </div>
          </div>
        </div>
      </section>

      <div class="row mb-5 align-items-center">
          
          <div class="col-md-6 overflow order-1">
            <img src="{{ asset('bootstrap/images/cssa.jpg') }}" alt="" class="img-fluid">
          </div>
          <div class="col-md-1 order-2"></div>
          <div class="col-md-5 order-3">
            <h2 class="mb-4">First, Want to Style Your Website?</h2>
            <p>CSS is a language that describes the style of an HTML document.</p>
            <p>CSS describes how HTML elements should be displayed.</p>
           
          </div>

        </div>

        <div class="row align-items-center">
          
          <div class="col-md-6 overflow order-3">
            <img src="{{ asset('bootstrap/images/cssb.jpg') }}" alt="" class="img-fluid">
          </div>
          <div class="col-md-1 order-2"></div>
          <div class="col-md-5 order-1">
            <h2 class="mb-4">CSS Frameworks</h2>
            <p>SASS.</p>
            <p>CCSS.</p>
            <p>960 Grid System.</p>
            <p>Bootstrap.</p>
            <p>Foundation.</p>
          </div>

        </div>

      </div>
    </section>
@endsection
